# symfony_json_auth

# 

# API (Customer Entity) 
# access_control: ROLE_USER
CustomerController:
  - /api/add (POST): Ekle
  - /api/list (GET): Listele
  - /api/get/{ID} (GET): Göster
  - /api/delete/{ID} (DELETE): Sil
  
# Auth (User Entity)
# Uses CustomAuthenticator
SecurityController:
  - /login (POST): Login
  - /logout (GET): Logout
  
# Subscriber
ExceptionSubscriber:
  - All exceptions > JsonResponse
