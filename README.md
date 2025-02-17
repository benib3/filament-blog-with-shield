
# Implementing Shield with Filament FBlog Plugin

This project is an example of how to implement the Shield plugin with the Filament Blog plugin in a Laravel application.

## Steps

1. Initialize Laravel project.
2. Install and initialize Filament. [More info](https://filamentphp.com/docs/3.x/panels/installation)
3. Install and initialize the Shield plugin. [More info](https://filamentphp.com/plugins/bezhansalleh-shield#installation)
4. Install and initialize the FBlog plugin. [More info](https://filamentphp.com/plugins/firefly-blog#installation)
5. Create `UserResource` using Filament and add `HasRoles` to the User model.
6. Run the Shield generator to generate policies.
7. Create roles and a new user with the assigned role.
8. Add the Gate policy in `AppServiceProvider` for the corresponding FBlog model and the generated Shield policy.
