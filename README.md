
### Installation

```bash
cp .env.example .env

# Set Mysql configuration
composer install
php artisan key:generate
php artisan voyager:install
php artisan db:seed

# Seeding will create three users - 1 AdminUser, 1 NormalUser and 1 CompanyUser
# Admin User Credentials (email: admin@admin.com, password: password)
# Normal User Credentials (email: user@user.com, password: password)
# Agricultural Expert Credentials (email: expert@expert.com, password: password)
```

### Other Useful commands
```bash
 php artisan migrate:generate crops,cotton_parts,cotton_symptoms,cotton_problems,cotton_level2_symptoms,cotton_level3_symptoms,cotton_problem_symptoms
 php artisan iseed data_rows,data_types,menus,menu_items,permissions,roles,settings,translations,user_roles,users --classnameprefix=CropDarpan
 php artisan iseed crops,cotton_parts,cotton_symptoms,cotton_problems,cotton_level2_symptoms,cotton_level3_symptoms,cotton_problem_symptoms --classnameprefix=CropDarpan
 php artisan serve
```
