@include('layout.main-layout')

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .main-container {
            background-color: #ffffff;
            padding: 20px;
        }
        .header-section {
            background-image:url('{{ asset('images/image 1.png') }}');
            background-size: cover;
            background-position: center;
            padding: 100px;
            color: white;
        }
        .review-card {
            border: none;
            color: white;
            position: relative; /* Needed to position the delete button */
        }
        .review-card img {
            width: 20px;
            height: 20px;
        }
        .rating-progress-bar {
            background-color: rgba(139, 69, 19, 0.5);
        }
        .bg-red {
            background-color: #8c2626; /* Darker Red */
        }
        .bg-yellow {
            background-color: #b8860b; /* Darker Yellow */
        }
        .bg-green {
            background-color: #4a8c4a; /* Green */
        }
        .review-form {
            display: none;
        }
        .fixed-width-bar {
            width: 80px; /* Fixed width for progress bar */
            text-align: center; /* Center align text inside progress bar */
        }
        .delete-button {
            position: absolute;
            bottom: 10px;
            right: 10px;
            transition: transform 0.2s, background-color 0.2s; /* Add smooth transition */
        }
    </style>
</head>

<body>
<div class="container main-container mt-5">
    <div class="header-section text-center mb-5">
        <h1>Review</h1>
        <p>Berikan ulasan anda terhadap website kami agar kami dapat terus berkembang!</p>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card rating-progress-bar p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="fs-4 fw-bolder">Rata-rata Ulasan</p>
                        <p class="display-4">{{ number_format($averageRating, 1) }}</p>
                    </div>
                    <div class="progress-bars">
                        @foreach([5, 4, 3, 2, 1] as $star)
                            <div class="d-flex align-items-center mb-2">
                                <p class="mb-0 me-2">{{ $star }}</p>
                                <div class="progress flex-grow-1" style="height: 20px;">
                                    <div class="progress-bar bg-warning fixed-width-bar" role="progressbar" aria-valuenow="{{ $ratingsCount[$star] ?? 0 }}" aria-valuemin="0" aria-valuemax="100">{{ $ratingsCount[$star] ?? 0 }} Review</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($reviews as $review)
            @php
                $cardClass = '';
                if ($review->rating <= 2) {
                    $cardClass = 'bg-red';
                } elseif ($review->rating == 3) {
                    $cardClass = 'bg-yellow';
                } else {
                    $cardClass = 'bg-green';
                }
            @endphp
            <div class="col-md-6 mb-4">
                <div class="card review-card {{ $cardClass }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $review->title }}</h5>
                        <p class="card-text">{{ $review->comment }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <img src="/images/star.png" alt="star">
                                <span class="ms-2">{{ $review->rating }}</span>
                            </div>
                            <p class="mb-0">{{ $review->user->name }}</p>
                        </div>
                        <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" class="delete-button">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" style="opacity: 0.8;">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    document.getElementById('add-review-btn').addEventListener('click', function() {
        const reviewForm = document.querySelector('.review-form');
        if (reviewForm.style.display === 'none' || reviewForm.style.display === '') {
            reviewForm.style.display = 'block';
        } else {
            reviewForm.style.display = 'none';
        }
    });
</script>
</body>
</html>