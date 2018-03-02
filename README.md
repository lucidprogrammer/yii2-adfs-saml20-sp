
# Usage

## Environment Settings

Use .env_template and create .env. Fill in the details as per your situation. You should be ready to go.

## Code Changes to the basic app

### app/config/web.php refer to the following.
Once you do this setting, the app will be using SAML.
```
'user' => [
    'class' => 'lucidprogrammer\simplesamlphp\SamlUser',
    'idAttribute' => 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress',
],

```
### controllers/SiteController

Not much
```
public function actionIndex()
{
  var_dump(Yii::$app->user);
}

```

## Go

```
docker-compose up
```
