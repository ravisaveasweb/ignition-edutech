# Optimized Laravel Migration Set

This migration set is rebuilt from the uploaded `migrations(1).zip` for a clean dummy-data reset.

## Important

Replace your current `database/migrations` contents with the PHP files in this folder.

Do NOT keep the old duplicate/obsolete migrations alongside these files.

The optimized set:
- moves Universities into the main migration order (no `dummy/` migration)
- creates States -> Cities -> Universities before dependent foreign keys
- creates the Course/University pivot only after both tables exist
- creates the Accreditation/University pivot only after both tables exist
- creates Reviews only after Universities and Users exist
- creates Scholarships and FAQs first, then safely adds `university_id` in the final University module migration
- creates University placements, recruiters, facilities, admissions
- adds one-to-one University SEO fields
- keeps Spatie `media` table
- removes duplicate University content migrations
- fixes the `enquiries` down() table name
- does not add `courses.university_id`; the many-to-many `course_university` pivot is the source of truth

## Run

After replacing the migrations:

php artisan optimize:clear
php artisan migrate:fresh --seed

Then, if needed:
php artisan storage:link

If `public/storage` already exists, the storage-link command can report that it already exists; that is not a migration error.

## Do not use

php artisan migrate:rollback

or

php artisan migrate

as the first command after replacing the full migration set. Since the current database contains dummy data, use `migrate:fresh --seed`.
