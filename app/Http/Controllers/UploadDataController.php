<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\ItemEN;
use App\Services\DataServices;
use Illuminate\Http\Request;

class UploadDataController extends Controller
{
    public function exec_action(Request $request)
    {
        $data_service = new DataServices('ar');

        $arr = $data_service->run('جيم',1,2);
        dd($arr);
    }

    public function delete_dublicates(Request $request)
    {
        $duplicateItems = Item::select('Category', 'Business Name', 'Address')
            ->selectRaw('COUNT(*) as count')
            ->groupBy('Category', 'Business Name', 'Address')
            ->havingRaw('COUNT(*) > 1')
            ->get();

// Loop through the duplicate records and delete all but one record in each group
        foreach ($duplicateItems->skip(1) as $duplicateItem) {
            Item::where('Category', $duplicateItem->Category)
                ->where('Business Name', $duplicateItem['Business Name'])
                ->where('Address', $duplicateItem->Address)
                ->orderBy('id', 'DESC') // You can use any appropriate column for ordering
                ->skip(1) // Skip the first record (keep one, delete the rest)
                ->delete();
        }

    }

    public function handle_city()
    {
        $items = Item::query()->orderBy('id', 'asc')->paginate(100000, ['*'], 'page', 4);

        foreach ($items as $item) {
            $data = explode(',', $item->Address);
            if (isset($data[count($data) - 2]))
                $item->update(['City' => $data[count($data) - 2]]);
            else
                $item->update(['City' => $data[count($data) - 1]]);
            $item->update(['City' => trim($item->City)]);

        }
    }


    /*public function createUploadFolder(Request $request)
    {
        return view('backend.admin.uploads.create');
    }

    public function uploadFolder(Request $request)
    {
        $files = $request->files;
        $file_name = null;
        foreach($files as $fileCSV){
            // Read the CSV file
            $file = fopen($fileCSV, "r");
            if ($file) {
                // Skip the header row
                fgetcsv($file);
                while (($data = fgetcsv($file, 1000,';')) !== false) {
                    if(isset($data[3])){
                        try{
                            $info = explode(',',$data[3]);
                        }catch (Exception $e){
                            dd($data);
                        }
                        // Extract the values from each row
                        $column1 = trim($data[0]); // Replace with the appropriate column index
                        $column2 = $data[1] ?? null; // Replace with the appropriate column index
                        $column3 = $data[2]?? null; // Replace with the appropriate column index
                        $column4 = $data[3]?? null; // Replace with the appropriate column index
                        $column5 = trim(trim(end($info),'.'),' ') ?? null; // Replace with the appropriate column index
                        $column6 = $data[5]?? null; // Replace with the appropriate column index
                        $column7 = $data[5]?? null; // Replace with the appropriate column index
                        $column8 = $data[7]?? null; // Replace with the appropriate column index
                        $column9 = $data[8]?? null; // Replace with the appropriate column index
                        $column10 = $data[9]?? null; // Replace with the appropriate column index
                        $column11 = $data[10]?? null; // Replace with the appropriate column index
                        $column12 = $data[11]?? null; // Replace with the appropriate column index
                        $column13 = $data[12]?? null; // Replace with the appropriate column index
                        $item = Item::where('Business Name',$column2)
                            ->where('Address',$column3)->get();
                        if($item->count() == 0)
                            Item::create([
                                'Category' => $column1,
                                'Business Name' => $column2,
                                'Address' => $column3,
                                'City' => $column4,
                                'State' => $column5,
                                'Zip Code' => $column6,
                                'Country' => $column7,
                                'Phone' => $column8,
                                'Fax' => $column9,
                                'Website' => $column10,
                                'Email' => $column11,
                                'Details Link' => $column12,
                            ]);
                    }
                }

            } else {
                echo "Error opening the CSV file.";
            }
            // Close the file
            fclose($file);

        }

        return 0;
    }*/


    public function get_yellow_page_data_form()
    {
        $item_count = Item::count();
        $duplicates = Item::select('Category', 'Business Name', 'Address')
            ->selectRaw('COUNT(*) as count')
            ->groupBy('Category', 'Business Name', 'Address')
            ->havingRaw('COUNT(*) > 1')
            ->count();
        return view('backend.admin.yellow_page_data_form', compact(
            'item_count',
            'duplicates'
        ));
    }

    public function get_yellow_page_data_form_en()
    {
        $item_count = ItemEN::count();
        $duplicates = ItemEN::select('Category', 'Business Name', 'Address')
            ->selectRaw('COUNT(*) as count')
            ->groupBy('Category', 'Business Name', 'Address')
            ->havingRaw('COUNT(*) > 1')
            ->count();
        return view('backend.admin.yellow_page_data_form_en', compact(
            'item_count',
            'duplicates'
        ));
    }

    public function get_yellow_page_data(Request $request)
    {

        $data_service = new DataServices('ar');

        $arr = $data_service->run($request->category_name,$request->from_page,$request->to_page);

        foreach ($arr as $data) {
            $item = Item::create([
                'Category' => $data['category'],
                'Business Name' => $data['name'],
                'Address' => $data['address'],
                'company_id' => $data['company_id'],
            ]);
            $data = explode(',', $item->Address);
            if (isset($data[count($data) - 2])) {
                $item->update(['City' => trim($data[count($data) - 2])]);
                $item->update(['State' => trim(str_replace('.', '', $data[count($data) - 1]))]);
            } else {
                $item->update(['City' => trim($data[count($data) - 1])]);
                $item->update(['State' => trim(str_replace('.', '', $data[count($data) - 1]))]);
            }
            $item->update(['City' => trim($item->City)]);
            if ($item->categories_details == null)
                Category::create(['category_name' => $item->Category]);
        }
        return redirect()->back()->with('success', 'تعدد البيانات المحصول عليها ' . $arr->count() . 'وغدد الصفحات هو ' . $arr->count()/20) ;
    }


    public function get_phones()
    {

        $data_service = new DataServices('ar');
        $items = Item::where('Category','جيم')->orderBy('id', 'DESC')->first();

            if($items->company_id){

                $arr = $data_service->get_phones($items->company_id);
                $items->update(['Phone'=>$arr[0]]);
            }


    }


}

