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
        background-image: url('images/image 1.png'); /* Adjust this path as needed */
        background-size: cover;
        background-position: center;
        padding: 100px;
        color: white;
      }
      .review-card {
        border: none;
        color: white;
      }
      .review-card img {
        width: 20px;
        height: 20px;
      }
      .rating-progress-bar {
        background-color: rgba(139, 69, 19, 0.5);
      }
      .bg-red {
        background-color: #b33a3a; /* Red */
      }
      .bg-yellow {
        background-color: #d4a32f; /* Yellow */
      }
      .bg-green {
        background-color: #4a8c4a; /* Green */
      }
    </style>
  </head>

  <body>
    <div class="container main-container mt-5">
      <!-- Header Section -->
      <div class="header-section text-center mb-5">
        <h1>Review</h1>
        <p>Berikan penilaian anda terhadap website kami agar kami dapat terus berkembang!</p>
      </div>

      <!-- Rating Summary -->
      <div class="row mb-5">
        <div class="col-md-6">
          <div class="card rating-progress-bar p-3">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <p class="fs-4 fw-bolder">Rata-rata Review</p>
                <p class="display-4">{{ number_format($averageRating, 1) }}</p> <!-- Display average rating with one decimal place -->
              </div>
              <div class="progress-bars">
                @foreach([5, 4, 3, 2, 1] as $star)
                  <div class="d-flex align-items-center mb-2">
                    <p class="mb-0 me-2">{{ $star }}</p>
                    <div class="progress flex-grow-1" style="height: 20px;">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $starDistribution[$star] }}%;" aria-valuenow="{{ $starDistribution[$star] }}" aria-valuemin="0" aria-valuemax="100">{{ $starDistribution[$star] }}%</div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Reviews -->
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
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <!-- Review Form -->
      <div class="row">
        <div class="col-md-6">
          <form method="POST" action="{{ route('reviews.store') }}">
            @csrf
            <div class="mb-3">
              <label for="rating" class="form-label">Rating:</label>
              <input type="number" id="rating" name="rating" min="1" max="5" required class="form-control">
            </div>
            <div class="mb-3">
              <label for="comment" class="form-label">Komentar:</label>
              <textarea id="comment" name="comment" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
