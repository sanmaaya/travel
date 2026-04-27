<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelScape - Your Recommendations</title>
    <link rel="stylesheet" href="{{ asset('css/app-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <header class="hero">
            <a href="{{ route('home') }}" style="color: var(--primary); text-decoration: none; font-weight: 600; display: inline-block; margin-bottom: 2rem;">
                <i class="fa-solid fa-arrow-left"></i> Back to Search
            </a>
            <h1>Suggested Destinations</h1>
            <p>Based on your budget of <strong>${{ number_format($budget) }}</strong> and preferences.</p>
        </header>

        @if($destinations->isEmpty())
            <div class="glass" style="padding: 4rem; text-align: center; margin-top: 2rem;">
                <i class="fa-solid fa-plane-slash" style="font-size: 4rem; color: var(--accent); margin-bottom: 1.5rem;"></i>
                <h2>No matches found</h2>
                <p style="color: var(--text-muted);">Try adjusting your budget or dates for more options.</p>
                <a href="{{ route('home') }}" class="btn-recommend" style="display: inline-block; width: auto; margin-top: 2rem; padding: 0.75rem 2rem;">Adjust Search</a>
            </div>
        @else
            <div class="results-grid">
                @foreach($destinations as $destination)
                    <div class="destination-card glass">
                        <img src="{{ $destination->image_url }}" alt="{{ $destination->name }}" class="card-image">
                        <div class="card-content">
                            <div class="card-header">
                                <div>
                                    <h3>{{ $destination->name }}</h3>
                                    <span style="color: var(--text-muted); font-size: 0.9rem;">{{ $destination->location }}</span>
                                </div>
                                <span class="badge">Recommended</span>
                            </div>
                            
                            <div class="budget-info">
                                FROM ${{ number_format($destination->min_budget) }} - ${{ number_format($destination->max_budget) }}
                            </div>
                            
                            <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6;">
                                {{ $destination->description }}
                            </p>

                            <div class="activity-list">
                                @foreach($destination->activities as $activity)
                                    <span class="activity-tag">#{{ $activity->name }}</span>
                                @endforeach
                            </div>

                            <button class="btn-recommend" style="padding: 0.75rem; font-size: 0.9rem;">Book Trip Now</button>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <footer style="margin-top: 6rem; text-align: center; color: var(--text-muted); padding-bottom: 4rem;">
            <p>&copy; 2026 TravelScape AI. Built with Laravel 12.</p>
        </footer>
    </div>
</body>
</html>
