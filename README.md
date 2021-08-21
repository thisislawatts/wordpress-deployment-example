Overview
---

An example repository demonstrating automated deployment to multiple environments.

These environments are:

* production
* preview/staging
* development

There is a lightweight Gitflow being used here to co-ordinate releases. This requires
2 branches; `main` and `production`.

Aims
---

* Remove the any manual steps outside of GitHub to trigger deployments
* Make it easy for new developer volunteers to understand how to get code reviewed and into production quickly, and to do it!
* Make GitHub the source of truth for what has been deployed to the Staging and Production environments. The mapping would be
  * Default branch `main|master` => Staging
  * Production branch `production` => Production


Proposed workflow
---

1. Developer raise PR from their feature branch against the `main` branch.
2. Feature branch will be deployed to `development` environment
3. After approval is received, the owning developer merges their PR into the `main` branch
4. Changes to `main` are deployed to the `preview/staging` environment
5. (Optional) In GitHub, a PR is automatically generated to merge the default branch into the production branch. This is known as the Release PR.
6. An admin user **manually** merges a Release PR into the production branch.
7. Any changes merged to the `production` branch are automatically deployed to the `production` environment.


Production environment:
[https://lukes-example-site.onyx-sites.io/](https://lukes-example-site.onyx-sites.io)


Hit list

[ ] Manual pushes to `main` are disabled
[ ] Pushes to `main` are deployed to *Staging*
[ ] Any other PRs are deployed to *Development*
[ ] Pushes/merges to `production` are deployed to Production
[ ] PR is automatically deployed to 