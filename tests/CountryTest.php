<?php
sexshop224.mitiendanube.com

{
  "username": "clientUsername",
  "client_id": "5qqGKGm4AaawnAJ0J6xluc6AWdQBvLW6",
  "client_secret_id": "cLp1iGEB-PA6KtL4Hi7tocsopP2pZxzaBLciOCApWH92e9_Jloe8CD2ilM63NppG"
}curl -X GET\
    -H "Authorization: Bearer [[accessToken]]"\
    -H "Content-Type: application/json"\
    "https://checkout.prod.ua.la/1/notifications"{
  "uuid": "9d42ef50-a139-4606-bc21-43d5e2722876",
  "ref_number": "sf2e0241-a139-4606-adb1-74a842641281",
  "status": "APPROVED",
  "created_date": "2022-06-06T13:23:27Z",
  "api_version": "1"
}curl -X GET\
  -H "Authorization: Bearer [[accessToken]]"\
  -H "Content-Type: application/json"\
  "https://checkout.prod.ua.la/1/order/[[orderId]]"{
  "orders": [
      {
          "order_id": "d5894497-7",
          "status": "PROCESSED",
          "ref_number": "f3d77773-7",
          "created_date": "2022-08-04T13:05:42Z",
          "amount": 99.23
      },{...}
  ]
}curl --location --request POST 'https://auth.prod.ua.la/1/auth/token' \
--header 'Content-Type: application/json' \
--data-raw '{
          "user_name" : "[[user_name]]",
          "client_id" : "[[client_id]]",
          "client_secret_id" : "[[client_secret_id]]",
          "grant_type" : "client_credentials"
}'{
  "amount": "10.21",
  "description": "Venta",
  "userName": "your-username",
  "callback_fail": "https://www.google.com/search?q=failed",
  "callback_success": "https://www.google.com/search?q=success",
  "notification_url": "https://www.notificationurl.com"
}{
  "id": "/api/v2/orders/d150e148-8c0c-4757-905f-f66c63bba16",
  "type": "Order",
  "uuid": "d150e148-8c0c-4757-905f-f66c63bba16",
  "orderNumber": "0004216-000000232",
  "currency": "032",
  "amount": 10.21,
  "status": "PENDING",
  "refNumber": "ed53c586-a34e-4900-a383-926aad9560d",
  "links": {
    "checkoutLink": "https://checkout-uala.preprod.geopagos.com/orders/d150e148-8c0c-4757-905f-f66c63bba16",
    "success": "https://www.google.com/search?q=success",
    "failed": "https://www.google.com/search?q=failed"
  }
}5834108783:AAH1Sz5BWVX74XFOjC2Cmez2Xx2hVJD4sho