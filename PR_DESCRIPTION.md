Integrate Fruits template into Laravel (skeleton)

What I added:
- Frontend layout and partials for Fruits template (resources/views/layouts/frontend.blade.php, partials)
- Blade views for fruits pages (resources/views/fruits/...)
- FruitsController with basic page actions
- routes/fruits.php with route group (require it from routes/web.php)
- scripts/copy-fruits-assets.sh to copy template assets into public/theme/fruits

Notes:
- Run scripts/copy-fruits-assets.sh to copy css/js/img/lib into public/theme/fruits
- After copying, review each Blade view and replace placeholder content with full HTML from fruits/*.html if needed
- To enable the routes, add to routes/web.php: require __DIR__ . '/fruits.php';
- To avoid CSS conflicts with admin, use layouts/admin.blade.php and keep admin assets under public/theme/admin/