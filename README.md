# symfony_json_auth

## API (Customer Entity) 

CustomerController:
  - /api/add (POST): Ekle
  - /api/list (GET): Listele
  - /api/get/{ID} (GET): Göster
  - /api/delete/{ID} (DELETE): Sil
  
## Auth (User Entity) 

SecurityController & CustomAuthenticator:
  - /login (POST): Login
  - /logout (GET): Logout
  
## Subscriber

ExceptionSubscriber:
  - All exceptions > JsonResponse
