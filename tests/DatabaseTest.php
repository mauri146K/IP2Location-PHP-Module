<?php

diff --git a/README.md b/README.md
index 809f3c08f7bb1de8765b2959a5426f11ccc36d8c..dc1b092fc7c20f0f4d76c1cd9cc521b50eb72067 100644
--- a/README.md
+++ b/README.md
@@ -1,92 +1,96 @@
-# Naranjax
-<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11334033412"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-11334033412'); </script>
+=== Integrar Ualá Bis con WooCommerce ===
+Contributors: ualabis, wanderlustcodes
+Donate link: https://shop.wanderlust-webdesign.com/
+Tags: woocommerce, ualabis
+Requires at least: 5.0
+Tested up to: 6.2
+Stable tag: 0.1.2
+License: GPLv2 or later
+License URI: http://www.gnu.org/licenses/gpl-2.0.html
 
+Con este plugin podés permitirle a tus clientes pagar con tarjetas de débito o crédito y recibir el dinero al instante en tu cuenta Ualá, con bajas comisiones.
 
-## Getting started
+== Description ==
 
-To make it easy for you to get started with GitLab, here's a list of recommended next steps.
+Con este plugin podés permitirle a tus clientes pagar con tarjetas de débito o crédito y recibir el dinero al instante en tu cuenta Ualá, con bajas comisiones.
 
-Already a pro? Just edit this README.md and make it your own. Want to make it easy? [Use the template at the bottom](#editing-this-readme)!
+Activar Ualá Bis como método de cobro es muy fácil, sólo vas a necesitar tener una cuenta en Ualá y aceptar los términos y condiciones en la sección “cobros” para crearte una nueva cuenta en Ualá Bis.
 
-## Add your files
 
-- [ ] [Create](https://docs.gitlab.com/ee/user/project/repository/web_editor.html#create-a-file) or [upload](https://docs.gitlab.com/ee/user/project/repository/web_editor.html#upload-a-file) files
-- [ ] [Add files using the command line](https://docs.gitlab.com/ee/gitlab-basics/add-file.html#add-a-file-using-the-command-line) or push an existing Git repository with the following command:
+== Installation ==
 
-```
-cd existing_repo
-git remote add origin https://gitlab.com/naranja-x1/Naranjax.git
-git branch -M main
-git push -uf origin main
-```
+Configurá Ualá Bis siguiendo estos simples pasos:
 
-## Integrate with your tools
+1. Descargá el plugin y elegí dónde guardarlo.
+2. Dentro del panel de administración de WordPress dirigite a la pestaña WooCommerce > Ajustes > General y seleccioná pesos argentinos como moneda.
+3. Abrí la pestaña Plugins > Agregar nuevo y hacé click en “Subir plugin”.
+4. Seleccioná el plugin que descargaste antes y hacé click en Instalar ahora. Una vez instalado, seleccioná Activar.
+5. Ahora dirigite a la pestaña WooCommerce > Ajustes > Pagos y activá Ualá Bis como método de pago.
+6. Ingresá el Title y Description, te recomendamos los siguientes:
+   Title: Pagar con tarjeta de crédito o débito.
+   Description: Servicio provisto por Ualá Bis.
+7. Luego hacé click en el enlace para configurar las credenciales. Te va a llevar a una página para que completes tus datos de inicio de sesión de tu cuenta Ualá y aceptes los permisos.
+8. Seleccioná Guardar cambios, ¡y listo!.
 
-- [ ] [Set up project integrations](https://gitlab.com/naranja-x1/Naranjax/-/settings/integrations)
+Para consultas, podés contactarnos al mail developers.ualabis@uala.com.ar.
+Encontrá toda la documentación técnica en nuestra Web:
+https://developers.ualabis.com.ar
 
-## Collaborate with your team
 
-- [ ] [Invite team members and collaborators](https://docs.gitlab.com/ee/user/project/members/)
-- [ ] [Create a new merge request](https://docs.gitlab.com/ee/user/project/merge_requests/creating_merge_requests.html)
-- [ ] [Automatically close issues from merge requests](https://docs.gitlab.com/ee/user/project/issues/managing_issues.html#closing-issues-automatically)
-- [ ] [Enable merge request approvals](https://docs.gitlab.com/ee/user/project/merge_requests/approvals/)
-- [ ] [Set auto-merge](https://docs.gitlab.com/ee/user/project/merge_requests/merge_when_pipeline_succeeds.html)
+== Planes a futuro ==
 
-## Test and Deploy
 
-Use the built-in continuous integration in GitLab.
+== Frequently Asked Questions ==
 
-- [ ] [Get started with GitLab CI/CD](https://docs.gitlab.com/ee/ci/quick_start/index.html)
-- [ ] [Analyze your code for known vulnerabilities with Static Application Security Testing(SAST)](https://docs.gitlab.com/ee/user/application_security/sast/)
-- [ ] [Deploy to Kubernetes, Amazon EC2, or Amazon ECS using Auto Deploy](https://docs.gitlab.com/ee/topics/autodevops/requirements.html)
-- [ ] [Use pull-based deployments for improved Kubernetes management](https://docs.gitlab.com/ee/user/clusters/agent/)
-- [ ] [Set up protected environments](https://docs.gitlab.com/ee/ci/environments/protected_environments.html)
 
-***
+== Changelog ==
 
-# Editing this README
 
-When you're ready to make this README your own, just edit this file and use the handy template below (or feel free to structure it however you want - this is just a starting point!). Thank you to [makeareadme.com](https://www.makeareadme.com/) for this template.
+= 0.0.1 =
 
-## Suggestions for a good README
-Every project is different, so consider which of these sections apply to yours. The sections used in the template are suggestions for most open source projects. Also keep in mind that while a README can be too long and detailed, too long is better than too short. If you think your README is too long, consider utilizing another form of documentation rather than cutting out information.
+* VERSION INICIAL
 
-## Name
-Choose a self-explaining name for your project.
+= 0.0.2 =
 
-## Description
-Let people know what your project can do specifically. Provide context and add a link to any reference visitors might be unfamiliar with. A list of Features or a Background subsection can also be added here. If there are alternatives to your project, this is a good place to list differentiating factors.
+* ARREGLOS WEBHOOK
 
-## Badges
-On some READMEs, you may see small images that convey metadata, such as whether or not all the tests are passing for the project. You can use Shields to add some to your README. Many services also have instructions for adding a badge.
+= 0.0.3 =
 
-## Visuals
-Depending on what you are making, it can be a good idea to include screenshots or even a video (you'll frequently see GIFs rather than actual videos). Tools like ttygif can help, but check out Asciinema for a more sophisticated method.
+* ARREGLO TOTAL CUPONES
 
-## Installation
-Within a particular ecosystem, there may be a common way of installing things, such as using Yarn, NuGet, or Homebrew. However, consider the possibility that whoever is reading your README is a novice and would like more guidance. Listing specific steps helps remove ambiguity and gets people to using your project as quickly as possible. If it only runs in a specific context like a particular programming language version or operating system or has dependencies that have to be installed manually, also add a Requirements subsection.
+= 0.0.4 =
 
-## Usage
-Use examples liberally, and show the expected output if you can. It's helpful to have inline the smallest example of usage that you can demonstrate, while providing links to more sophisticated examples if they are too long to reasonably include in the README.
+* ARREGLO URL NOTIFICACIONES CALLBACK
 
-## Support
-Tell people where they can go to for help. It can be any combination of an issue tracker, a chat room, an email address, etc.
+= 0.0.5 =
 
-## Roadmap
-If you have ideas for releases in the future, it is a good idea to list them in the README.
+* ARREGLO NOMBRE ESTADO DE PAGO APROBADO
 
-## Contributing
-State if you are open to contributions and what your requirements are for accepting them.
+= 0.0.6 =
 
-For people who want to make changes to your project, it's helpful to have some documentation on how to get started. Perhaps there is a script that they should run or some environment variables that they need to set. Make these steps explicit. These instructions could also be useful to your future self.
+* ARREGLO URL DE PAGOS PARA PEDIDO FALLIDO
 
-You can also document commands to lint the code or run tests. These steps help to ensure high code quality and reduce the likelihood that the changes inadvertently break something. Having instructions for running tests is especially helpful if it requires external setup, such as starting a Selenium server for testing in a browser.
+= 0.0.7 =
 
-## Authors and acknowledgment
-Show your appreciation to those who have contributed to the project.
+* MOSTRAR CARTEL DE ERROR EN EL PAGO
 
-## License
-For open source projects, say how it is licensed.
+= 0.1.0 =
 
-## Project status
-If you have run out of energy or time for your project, put a note at the top of the README saying that development has slowed down or stopped completely. Someone may choose to fork your project or volunteer to step in as a maintainer or owner, allowing your project to keep going. You can also make an explicit request for maintainers.
+* CONFIGURACIÓN DE PLUGIN CON AUTENTICACIÓN POR LINK. YA NO ES NECESARIO SOLICITAR CREDENCIALES A UALÁ.
+* EL CARRITO SE VACÍA SÓLO CUANDO EL PAGO ES APROBADO.
+
+= 0.1.1 =
+
+* Fix de Notificaciones en PHP.
+
+= 0.1.2 =
+
+* Fix uala_error_pago_complete.
+
+
+
+== Upgrade Notice ==
+
+
+
+== Screenshots ==