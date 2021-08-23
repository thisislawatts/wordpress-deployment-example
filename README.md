Overview
---

An example repository demonstrating automated deployment to multiple environments.

These environments are:

* Production
* Preview/staging
* Development

There is a lightweight Gitflow being used here to co-ordinate releases. This requires
2 branches; `staging` and `production`.

Aims
---

* No steps outside of GitHub are required trigger or manage deployments
* Makes GitHub the source of truth for what has been deployed to the Staging and Production environments. The mapping would be
  * Default branch `staging` => Staging
  * Production branch `production` => Production


Proposed workflow for contributors
---

1. Developer raise PR from their feature branch against the `staging` branch.
2. Feature branch will be deployed to `development` environment
3. After approval is received, the owning developer merges their PR into the `staging` branch
4. Changes to `staging` are deployed to the `preview/staging` environment
5. (Optional) In GitHub, a PR is automatically generated to merge the default branch into the production branch. This is known as the Release PR.
6. An admin user **manually** merges a Release PR into the production branch.
7. Any changes merged to the `production` branch are automatically deployed to the `production` environment.


Production environment:
[https://lukes-example-site.onyx-sites.io/](https://lukes-example-site.onyx-sites.io)
