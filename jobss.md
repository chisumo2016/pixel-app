# Applications  Pa$$w0rd!

            https://www.youtube.com/watch?v=5BhFF7K9ofw
    . Put all Images in Resource/Images
    .Setup the Layouts called components 
        resources/views/components/layout.blade.php
            .nav bar
                Three parts
                    . logo
                    . navigation
                    . create Job
            .main
    . Install  npm install
    .Delete Welcome code and replace with
        <x-layout>
                
        </x-layout>
    NPM RUV BUILD
        resources/js/app.js

    - Use Grid /Flexbox
        https://tailwindcss.com/docs/installation/framework-guides

# JOBS TAGS  TDD

            modified:   app/Http/Controllers/JobController.php
        modified:   app/Models/Job.php
        modified:   app/Providers/AppServiceProvider.php
        modified:   database/migrations/2024_05_08_083749_create_employers_table.php
        modified:   database/migrations/2024_05_08_084848_create_jobs_table.php
        modified:   database/seeders/DatabaseSeeder.php
        modified:   database/seeders/JobSeeder.php
        modified:   phpunit.xml
        modified:   resources/views/components/job-card-wide.blade.php
        modified:   resources/views/components/job-card.blade.php
        modified:   resources/views/components/tag.blade.php
        modified:   routes/web.php
        modified:   tests/Pest.php

          app/Models/Tag.php
        database/factories/TagFactory.php
        database/migrations/2024_05_08_092910_create_tags_table.php
        database/migrations/2024_05_08_093401_create_job_tag_table.php
        resources/views/jobs/
        tests/Unit/

# CRUD AUTHENTICATION

    modified:   resources/views/components/layout.blade.php
	modified:   routes/web.php


    app/Http/Controllers/RegisterUserController.php
	app/Http/Controllers/SessionController.php
	resources/views/auth/
	resources/views/components/forms/
	resources/views/components/page-heading.blade.php
