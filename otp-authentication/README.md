# Laravel OTP Authentication and Location Management

This repository contains a Laravel application that authenticates users via phone number and OTP (One-Time Password) and provides a dashboard to manage location data. The application includes CRUD operations for managing 'States', 'Cities', and 'Pincodes' associated with 'Customers'.

## Setup Instructions

### Prerequisites

- PHP >= 8.0
- Composer
- MySQL or any other supported database
- Node.js and npm (for front-end assets)

### Installation

1. **Clone the repository**:
    ```bash
    git clone https://github.com/yourusername/your-repository.git
    cd your-repository
    ```

2. **Install dependencies**:
    ```bash
    composer install
    npm install
    npm run dev
    ```

3. **Set up your environment**:
    - Copy `.env.example` to `.env`:
      ```bash
      cp .env.example .env
      ```
    - Configure your database and other settings in the `.env` file.

4. **Generate application key**:
    ```bash
    php artisan key:generate
    ```

5. **Run migrations**:
    ```bash
    php artisan migrate
    ```

6. **Serve the application**:
    ```bash
    php artisan serve
    ```

### OTP Setup

- The application uses a console-based OTP for simplicity. When a user registers or logs in, an OTP will be generated and stored in users table realtime.

## Usage

### User Authentication

1. **Registration**:
    - Navigate to `/register`.
    - Enter your phone number.
    - An OTP will be generated and and stored in users table realtime.
    - Enter the OTP to complete the registration.

2. **Login**:
    - Navigate to `/login`.
    - Enter your phone number.
    - An OTP will be generated and and stored in users table realtime..
    - Enter the OTP to log in.

3. **Dashboard**:
    - Navigate to `/dashboard`.
    - Dshboard wiew will be available.
    - Dashboard page where they can manage location data.

### CRUD Operations

- **States**:
    - Create, read, update, and delete states.

- **Cities**:
    - Create, read, update, and delete cities.

- **Pincodes**:
    - Create, read, update, and delete pincodes.

- **Customers**:
    - Associate customers with states, cities, and pincodes.

### Database Models and Relationships

- **State**:
    - Has many cities.
- **City**:
    - Belongs to a state.
    - Has many pincodes.
- **Pincode**:
    - Belongs to a city.
- **Customer**:
    - Belongs to a state, city, and pincode.

## Security Considerations

- Ensure secure handling of OTPs and user data.
- Use environment variables to manage sensitive information.
- Follow Laravel's security best practices.

## Contributing

- Contributions are welcome! Please submit a pull request or open an issue for any improvements or bug fixes.

## License

- This project is open-source and available under the [MIT License](LICENSE).

## Contact

- For any questions or support, please contact mrsahani012@gmail.com.

