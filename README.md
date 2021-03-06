# BUILDING A NEWS PORTAL USING LARAVEL V5.5.28

## Section 1: Introduction

1. What is MVC and Its Benefits

2. Excise Files

3. How to Get the Source Code and Project Excies file

4. Course and Development Prerequisite

5. Why Laravel Frameworks

6. Laravel Features

7. How to Update Your Local Host Server

### 8. Laravel Installation and Folder Structure

      >> composer create-project laravel/laravel=5.5.28 newsportal

## Section 2: Controller And View In Action

### 9. Introduction to Route Part 1

### 10. Introduction to Route Part 2

        modified:   README.md
        modified:   routes/web.php

### 11. Introduction to Controller

      >> php artisan make:controller HelloController
      >> php artisan make:controller AddController --resource
        modified:   README.md
        new file:   app/Http/Controllers/AddController.php
        new file:   app/Http/Controllers/HelloController.php
        modified:   routes/web.php

### 12. Introduction to View + Controller

        modified:   README.md
        new file:   app/Http/Controllers/AboutController.php
        new file:   app/Http/Controllers/ContactController.php
        new file:   resources/views/about.blade.php
        new file:   resources/views/contact.blade.php
        modified:   routes/web.php

### 13. Introduction to Blade Template

        modified:   README.md
        modified:   resources/views/about.blade.php
        modified:   resources/views/contact.blade.php
        new file:   resources/views/master.blade.php

## Section 3: Setup Front View for Project Tamplate

### 14. Front View Setup Part 01 - Added home template in master.blade.php

        modified:   README.md
        modified:   app/Http/Controllers/AboutController.php
        modified:   app/Http/Controllers/AddController.php
        deleted:    app/Http/Controllers/ContactController.php
        ...
        new file:   public/front/js/script.js
        new file:   public/front/js/smoothscroll.js
        modified:   resources/views/about.blade.php
        modified:   resources/views/master.blade.php
        modified:   routes/web.php

### 15. Front View Setup Part 02 - Sagmenting the home page

        modified:   README.md
        modified:   app/Http/Controllers/HomeController.php
        new file:   resources/views/front/home.blade.php
        new file:   resources/views/front/layouts/components/home/category.blade.php
        renamed:    resources/views/master.blade.php -> resources/views/front/layouts/components/home/feature-news.blade.php
        new file:   resources/views/front/layouts/components/home/header-section.blade.php
        new file:   resources/views/front/layouts/master.blade.php
        new file:   resources/views/front/layouts/shared/footer.blade.php
        new file:   resources/views/front/layouts/shared/head.blade.php
        new file:   resources/views/front/layouts/shared/header.blade.php
        new file:   resources/views/front/layouts/shared/mobile-menu.blade.php
        new file:   resources/views/front/layouts/shared/scripts.blade.php
        new file:   resources/views/front/layouts/shared/subscriber.blade.php

### 16. Front View Setup Part 03 - Re-naming the HomeController to HomePageController

        modified:   README.md
        renamed:    app/Http/Controllers/HomeController.php -> app/Http/Controllers/HomePageController.php
        modified:   routes/web.php

### 17. Front View Setup Part 04 - Adding listing page with sagmentation

        modified:   README.md
        modified:   app/Http/Controllers/HomePageController.php
        new file:   app/Http/Controllers/ListingPageController.php
        new file:   resources/views/front/layouts/components/listing/breadcrumb.blade.php
        new file:   resources/views/front/layouts/components/listing/editor-corner.blade.php
        new file:   resources/views/front/layouts/components/listing/main-content.blade.php
        new file:   resources/views/front/layouts/components/listing/most-commented.blade.php
        new file:   resources/views/front/layouts/components/listing/pagination.blade.php
        new file:   resources/views/front/layouts/components/listing/popular-news.blade.php
        new file:   resources/views/front/layouts/components/listing/reders-corner.blade.php
        new file:   resources/views/front/layouts/components/listing/reviews.blade.php
        new file:   resources/views/front/listing.blade.php
        modified:   routes/web.php

### 18. Front View Setup Part 05 - Adding details page with sagmentation

        modified:   README.md
        new file:   app/Http/Controllers/DetailsPageController.php
        new file:   resources/views/front/details.blade.php
        new file:   resources/views/front/layouts/components/details/add-comments.blade.php
        new file:   resources/views/front/layouts/components/details/content.blade.php
        new file:   resources/views/front/layouts/components/details/readers-comment.blade.php
        new file:   resources/views/front/layouts/components/details/related-news.blade.php
        renamed:    resources/views/front/layouts/components/listing/editor-corner.blade.php -> resources/views/front/layouts/shared/side-editor-corner.blade.php
        renamed:    resources/views/front/layouts/components/listing/most-commented.blade.php -> resources/views/front/layouts/shared/side-most-commented.blade.php
        renamed:    resources/views/front/layouts/components/listing/popular-news.blade.php -> resources/views/front/layouts/shared/side-popular-news.blade.php
        renamed:    resources/views/front/layouts/components/listing/reders-corner.blade.php -> resources/views/front/layouts/shared/side-reders-corner.blade.php
        renamed:    resources/views/front/layouts/components/listing/reviews.blade.php -> resources/views/front/layouts/shared/side-reviews.blade.php
        modified:   resources/views/front/listing.blade.php
        modified:   routes/web.php

## Section 4: Setup Admin View for Project Tamplate

### 19. Admin View Setup Part 01

### 20. Admin View Setup Part 02

### 21. Admin View Setup Part 03

### 22. Admin View Setup Part 04

### 23. Admin View Setup Part 05

## Section 5: Essential Package Installation

### 24. Image Intervention Installation

### 25. CK Editor Installation

### 26. Laravel Collective Installation and Usage

## Section 6: DB Conncectivity And Model

### 27. Query Builder Part 01

### 28. Query Builder Part 02

### 29. Query Builder Part 03

### 30. How You Can Inner Join Two Table

### 31. How to Crate Model

## Section 7: Middleware,Authentication,Role Permission And Valdiation

### 32. Login with Laravel Default Auth Part 1

### 33. Login with Laravel Default Auth Part 2

### 34. Registration Of Author

### 35. Logout Option from Admin

### 36. Permission Create Part 01

### 37. Permission Create Part 02

### 38. Permission Create Part 03

### 39. Permission Create Part 04

### 40. Permission List Part 1

### 41. Permission List Part 2

### 42. Permission Edit and Update Part 1

### 43. Permission Edit and Update Part 2

### 44. Permission Delete

### 45. Role Create Part 01

### 46. Role Create Part 02

### 47. Role Create Part 03

### 48. Role List

### 49. Role Update Part 1

### 50. Role Update Part 2

### 51. Role Delete
