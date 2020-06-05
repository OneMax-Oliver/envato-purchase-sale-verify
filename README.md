# Envato product purchase or sale verify using Envato API
# Version 1.0.0

## Installation Process

Clone this repository using ssh or https or download as a zip file. Place this code in your server and open text editor to modify Envato API Key.
At first create Envato API and replace tokenBearer property in PurchaseVerify class.

Open any browser and visit http://YourServerAddress/envato-purchase-sale-verify/

## Verification response check
Open PurchaseVerify class and verify method return jsonResponse property instead of boolean to get the verification response code and details from envato.


## Verification invalid purchase codes
If the purchase code is invalid then the API will return a 404 Not Found response with the error in JSON like below:
<code>
	{
	    "error": 404,
	    "description": "No sale belonging to the current user found with that code"
	}
</code>

## Verification valid purchase codes
If the purchase code is valid and belongs to one of your items, you’ll get a response similar to the following.
<code>
	{
	  "amount": "45.26",
	  "sold_at": "2020-05-29T10:54:28+6:00",
	  "license": "Regular License",
	  "support_amount": "0.00",
	  "supported_until": "2020-11-29T10:54:28+6:00",
	  "item": {
	    "id": 19756926,
	    "name": "Dispensary - Dispensary Software",
	    "author_username": "JBRSOFT",
	    "updated_at": "2020-04-02T15:57:41+6:00",
	    "site": "codecanyon.net",
	    "price_cents": 2000,
	    "published_at": "2020-03-13T19:07:03+6:00"
	  },
	  "buyer": "buyers_username",
	  "purchase_count": 1
	}
</code>


## Contact

1. https://www.linkedin.com/in/raselrana/


All open source code released by me is licenced under the MIT licence. I welcome comments, feedback and suggestions. Please feel free to raise an issue or pull request.
Contributions are highly appreciated!
