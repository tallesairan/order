Lavalite package that provides order management facility for the cms.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `shopping/order`.

    "tallesairan/order": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

    Shopping\Order\Providers\OrderServiceProvider::class,

And also add it to alias

    'Order'  => Shopping\Order\Facades\Order::class,

## Publishing files and migraiting database.

**Migration and seeds**

    php artisan migrate
    php artisan db:seed --class=Shopping\\OrderTableSeeder

**Publishing configuration**

    php artisan vendor:publish --provider="Shopping\Order\Providers\OrderServiceProvider" --tag="config"

**Publishing language**

    php artisan vendor:publish --provider="Shopping\Order\Providers\OrderServiceProvider" --tag="lang"

**Publishing views**

    php artisan vendor:publish --provider="Shopping\Order\Providers\OrderServiceProvider" --tag="view"


## Usage


