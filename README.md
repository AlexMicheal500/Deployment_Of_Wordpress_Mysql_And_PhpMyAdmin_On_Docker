# Deployment_Of_Wordpress_Mysql_And_PhpMyAdmin_On_Docker
This file will setup Wordpress, MySQL &amp; PHPMyAdmin with a single command. Add the code below to a file called "docker-compose.yaml" and run the command
![image](https://user-images.githubusercontent.com/99332618/205986632-2f5aaead-2c6e-4f92-905e-b8648c82bae4.png)
To solve the above we should know that that in AWS we have teskeypair.pem and tyhat is a PRIVATE SERVER IP. And make sure when 
you are setting it as a variable, you make it a file
![image](https://user-images.githubusercontent.com/99332618/205987349-85d7ea31-9f95-42c4-b0cd-9bdf88cb74ff.png)

![image](https://user-images.githubusercontent.com/99332618/211559626-2632c011-2d07-493d-9aa4-b143185bcadf.png)
![image](https://user-images.githubusercontent.com/99332618/211559740-3dc9f6c2-9ea5-42e8-84ab-a5ce7efc771a.png)
![image](https://user-images.githubusercontent.com/99332618/211559911-877904eb-0a8a-4f8e-a6c6-57da0e4dfd37.png)

![image](https://user-images.githubusercontent.com/99332618/213138311-56dd4cb2-c5dd-47ba-8858-df4c88192fef.png)

The reason for database connection error in the images below was because sed comomand was having conflict with replacing names properly.
![image](https://user-images.githubusercontent.com/99332618/226101023-57c4a0cb-7283-42fc-913f-95bdfaa0588c.png)
![image](https://user-images.githubusercontent.com/99332618/226101032-88e2380e-6b0f-45ec-b5ef-e1d812c01924.png)
The solution is to change the values of the variables 
![image](https://user-images.githubusercontent.com/99332618/226101071-5b05f19e-8f08-4fbb-a637-97a9bd1051f3.png)
![image](https://user-images.githubusercontent.com/99332618/226110799-0eb21710-2d8a-46ad-b94c-c01ad7f742ff.png)

