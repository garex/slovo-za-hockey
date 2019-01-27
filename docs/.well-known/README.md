```
sudo docker run -it --rm --name certbot -v "/etc/letsencrypt:/etc/letsencrypt" -v "/var/lib/letsencrypt:/var/lib/letsencrypt" -v $(realpath docs)":/opt/certbot/docs" certbot/certbot certonly --manual -d slovo.za.hockey

[sudo] пароль для ustimenko: 
Saving debug log to /var/log/letsencrypt/letsencrypt.log
Plugins selected: Authenticator manual, Installer None
Obtaining a new certificate
Performing the following challenges:
http-01 challenge for slovo.za.hockey

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
NOTE: The IP of this machine will be publicly logged as having requested this
certificate. If you're running certbot in manual mode on a machine that is not
your server, please ensure you're okay with that.

Are you OK with your IP being logged?
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
(Y)es/(N)o: y

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
Create a file containing just this data:

gepeCB25qX6HxspywNt2qlHxTQZP0EFbm3krtfpJRsE.F0JJNGgyDziBbqZkXjjFIU4zeYX6fgDfNpfOhIL1M_A

And make it available on your web server at this URL:

http://slovo.za.hockey/.well-known/acme-challenge/gepeCB25qX6HxspywNt2qlHxTQZP0EFbm3krtfpJRsE

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
Press Enter to Continue
Waiting for verification...
Cleaning up challenges
Failed authorization procedure. slovo.za.hockey (http-01): urn:ietf:params:acme:error:unauthorized :: The client lacks sufficient authorization :: Invalid response from http://slovo.za.hockey/.well-known/acme-challenge/gepeCB25qX6HxspywNt2qlHxTQZP0EFbm3krtfpJRsE: "<!DOCTYPE html>\n<html>\n  <head>\n    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\">\n    <meta http-equiv=\"Co"

IMPORTANT NOTES:
 - The following errors were reported by the server:

   Domain: slovo.za.hockey
   Type:   unauthorized
   Detail: Invalid response from
   http://slovo.za.hockey/.well-known/acme-challenge/gepeCB25qX6HxspywNt2qlHxTQZP0EFbm3krtfpJRsE:
   "<!DOCTYPE html>\n<html>\n  <head>\n    <meta
   http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\">\n
   <meta http-equiv=\"Co"

   To fix these errors, please make sure that your domain name was
   entered correctly and the DNS A/AAAA record(s) for that domain
   contain(s) the right IP address.

```