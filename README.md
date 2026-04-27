# Travel Recommender System

A personalized travel recommendation system built with Laravel. This application helps users find their perfect destination based on their budget, travel dates, and preferred activities.

## Features

- **Personalized Recommendations**: Get destination suggestions tailored to your preferences.
- **Budget Filtering**: Find destinations that fit your financial constraints.
- **Seasonality Logic**: Recommendations take into account the best time to visit each location.
- **Activity Mapping**: Choose between Adventure, Relaxation, Culture, Nature, and more.
- **Modern UI**: Clean and intuitive interface for an effortless planning experience.

## Tech Stack

- **Backend**: Laravel
- **Frontend**: Blade, Vanilla CSS
- **Database**: MySQL/SQLite

## Setup Instructions

1.  **Clone the repository**:
    ```bash
    git clone https://github.com/sanmaaya/travel.git
    cd travel
    ```

2.  **Install dependencies**:
    ```bash
    composer install
    npm install
    ```

3.  **Environment Setup**:
    - Copy `.env.example` to `.env`
    - Generate application key: `php artisan key:generate`
    - Configure your database in `.env`

4.  **Run Migrations & Seeders**:
    ```bash
    php artisan migrate --seed
    ```

5.  **Start the server**:
    ```bash
    php artisan serve
    ```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
