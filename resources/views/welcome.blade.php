<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelScape - AI Powered Travel Recommendations</title>
    <link rel="stylesheet" href="{{ asset('css/app-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <header class="hero">
            <h1>TravelScape</h1>
            <p>Your dream destination is just a preference away.</p>
        </header>

        <main>
            <div class="search-card glass">
                <form action="{{ route('recommend') }}" method="POST">
                    @csrf
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="budget">Total Budget ($)</label>
                            <input type="number" id="budget" name="budget" placeholder="e.g. 2000" required min="100">
                        </div>

                        <div class="form-group">
                            <label for="start_date">Departure Date</label>
                            <input type="date" id="start_date" name="start_date" required>
                        </div>

                        <div class="form-group">
                            <label for="end_date">Return Date</label>
                            <input type="date" id="end_date" name="end_date" required>
                        </div>

                        <div class="form-group">
                            <label>Preferred Activities</label>
                            <div class="activity-chips">
                                @foreach($activities as $activity)
                                    <label class="activity-chip">
                                        <input type="checkbox" name="activities[]" value="{{ $activity->id }}">
                                        <span>{{ $activity->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group full">
                            <button type="submit" class="btn-recommend">
                                <i class="fa-solid fa-wand-magic-sparkles"></i> Get Recommendations
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <section class="featured">
                <h2 style="text-align: center; margin-bottom: 2rem; color: var(--text-muted);">Explore the Unexplored</h2>
                <!-- Decorative elements or static content could go here -->
            </section>
        </main>
    </div>

    <script>
        // Set default dates
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('start_date').min = today;
        
        document.getElementById('start_date').addEventListener('change', function() {
            document.getElementById('end_date').min = this.value;
        });
    </script>
</body>
</html>
