@push('styles')

    .restaurant-list {
    list-style: none;
    padding: 0;
    }

    .restaurant-item {
    margin-bottom: 20px;
    }

    .restaurant-link {
    display: flex;
    text-decoration: none;
    color: #000;
    }

    .restaurant-image {
    width: 100px;
    height: 100px;
    margin-right: 10px;
    }

    .restaurant-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    }

    .restaurant-details {
    flex: 1;
    }

    .restaurant-name {
    font-size: 18px;
    margin-bottom: 5px;
    }

    .restaurant-location,
    .restaurant-phone {
    font-size: 14px;
    margin: 0;
    }

@endpush
<ul class="restaurant-list">
    <li class="restaurant-item">
        <a href="#" class="restaurant-link">
            <div class="restaurant-image">
                <img src="path/to/restaurant-image.jpg" alt="Restaurant Image">
            </div>
            <div class="restaurant-details">
                <h3 class="restaurant-name">Restaurant Name</h3>
                <p class="restaurant-location">Restaurant Location</p>
                <p class="restaurant-phone">Restaurant Phone</p>
            </div>
        </a>
    </li>
    <!-- Add more list items here -->
</ul>
