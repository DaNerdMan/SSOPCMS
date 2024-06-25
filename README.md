# SSOPCMS - Super Simple One-Page CMS

[English](#english) | [Deutsch](#deutsch) | [Français](#français)

---

<a name="english"></a>
## English

### Introduction

SSOPCMS (Super Simple One-Page CMS) is an ultra-lightweight, efficient Content Management System designed for single-page websites. Developed by Daniel Erdmann, this system offers a streamlined set of features packed into a single PHP file, making it incredibly easy to deploy, maintain, and use for small-scale web projects.

### Key Features

1. **Single-File Architecture**: The entire CMS is contained within one PHP file, simplifying installation and updates.
2. **Multilingual Support**: Built-in support for English, German, and French, allowing you to cater to a diverse audience.
3. **WYSIWYG Editor**: Integrated CKEditor for intuitive content creation and editing, making it easy for non-technical users to update content.
4. **Customizable Design**: Basic design options with live preview functionality, allowing you to tailor the look and feel of your site without coding knowledge.
5. **Blog Functionality**: Simple integrated blogging system to keep your audience engaged with fresh content.
6. **File Management**: Basic file explorer for managing uploaded files, making it easy to add images and documents to your site.
7. **SEO Basics**: Essential SEO settings and metadata management to help improve your site's visibility in search engines.
8. **Privacy Controls**: Customizable privacy policy and cookie consent features to help you comply with data protection regulations.
9. **Responsive Design**: Basic responsive layout for various screen sizes, ensuring your site looks good on desktops, tablets, and smartphones.
10. **Secure Authentication**: Password-protected admin area to keep your site's backend secure.

### Installation

1. Upload the `index.php` file to your web server.
2. Access the file through your web browser.
3. Log in with the default credentials (username: admin, password: admin).
4. Change the default password immediately after first login to ensure security.

### Usage

#### Admin Panel

Access the admin panel by appending `?admin` to the URL or by using the admin link in the footer. This link allows you to log in and access all CMS features:

- **Content Management**: Edit page content using the WYSIWYG editor. This allows you to format text, add images, and structure your content without needing to know HTML.
- **Blog Management**: Create, edit, and delete blog posts. Keep your site fresh with regular updates and engage your audience.
- **Design Customization**: Modify basic colors, fonts, and layout options. Preview changes in real-time to see how they affect your site's appearance.
- **File Management**: Upload and manage files such as images or documents that you want to use on your site.
- **Settings**: Configure general settings, SEO parameters, and privacy policy. This includes setting your site's title, meta description, and customizing your privacy policy text.

#### Security Considerations

While SSOPCMS uses secure hashing for passwords, it's important to note that the configuration file (JSON) is stored on the server and could potentially be accessed if proper server security measures are not in place. This makes SSOPCMS suitable for many applications, but may not be appropriate for high-security scenarios. Always ensure your server is properly configured and secured.

Best practices for securing your SSOPCMS installation include:
- Regularly updating your server software
- Using strong, unique passwords
- Implementing proper file permissions
- Using SSL/TLS encryption for your site

#### Ideal Use Cases

SSOPCMS is perfect for:

- Personal portfolios: Showcase your work with a sleek, simple design.
- Single-product landing pages: Focus attention on your product with a streamlined, single-page layout.
- Event information pages: Provide all necessary details about your event in an easy-to-navigate format.
- Simple business websites: Present your business information clearly and professionally.
- Project showcase sites: Display your projects with an easy-to-update platform.
- Community or club websites: Keep members informed with easy content management and blog functionality.

It may not be suitable for:

- E-commerce platforms with sensitive user data: While SSOPCMS is secure for many applications, it's not designed for handling sensitive financial transactions.
- High-security applications: For applications requiring the highest levels of security, a more robust CMS might be more appropriate.
- Large-scale, complex websites: SSOPCMS is designed for simplicity and may not have all the features needed for very large or complex sites.

### Technical Requirements

- PHP 7.0 or higher: SSOPCMS leverages modern PHP features for improved performance and security.
- Web server with PHP support (e.g., Apache, Nginx): Ensure your web server is configured to run PHP scripts.
- Modern web browser for admin access: For the best experience, use an up-to-date version of Chrome, Firefox, Safari, or Edge.

### External Services

SSOPCMS uses the following external service:

- **CKEditor**: A WYSIWYG rich text editor which is loaded from an external CDN. This provides a user-friendly interface for content editing but does require an internet connection to load. Please be aware that this may have implications for privacy and offline functionality.

### License

SSOPCMS is released under the Creative Commons Attribution-ShareAlike 4.0 International (CC BY-SA 4.0) License.

#### You are free to:

- **Share** — copy and redistribute the material in any medium or format
- **Adapt** — remix, transform, and build upon the material for any purpose, even commercially

#### Under the following terms:

- **Attribution** — You must give appropriate credit to Daniel Erdmann, provide a link to the license, and indicate if changes were made. You may do so in any reasonable manner, but not in any way that suggests the licensor endorses you or your use.
- **ShareAlike** — If you remix, transform, or build upon the material, you must distribute your contributions under the same license as the original.
- **No additional restrictions** — You may not apply legal terms or technological measures that legally restrict others from doing anything the license permits.

For the full license text, visit: [https://creativecommons.org/licenses/by-sa/4.0/legalcode](https://creativecommons.org/licenses/by-sa/4.0/legalcode)

### Contact

For support, feature requests, or contributions, please visit Daniel Erdmann's website at https://www.madewithai.eu. This is the only way to contact the developer regarding SSOPCMS. Please note that response times may vary, and support is provided on a best-effort basis.

---

<a name="deutsch"></a>
## Deutsch

### Einführung

SSOPCMS (Super Simple One-Page CMS) ist ein ultraleichtes, effizientes Content-Management-System, das für Einzelseiten-Websites entwickelt wurde. Entwickelt von Daniel Erdmann bietet dieses System eine optimierte Reihe von Funktionen in einer einzigen PHP-Datei, was es unglaublich einfach macht, kleine Webprojekte zu erstellen, zu warten und zu nutzen.

### Hauptfunktionen

1. **Einzeldatei-Architektur**: Das gesamte CMS ist in einer PHP-Datei enthalten, was die Installation und Aktualisierung vereinfacht.
2. **Mehrsprachige Unterstützung**: Integrierte Unterstützung für Englisch, Deutsch und Französisch, um ein vielfältiges Publikum anzusprechen.
3. **WYSIWYG-Editor**: Integrierter CKEditor für intuitive Inhaltserstellung und -bearbeitung, der es auch nicht-technischen Benutzern ermöglicht, Inhalte zu aktualisieren.
4. **Anpassbares Design**: Grundlegende Designoptionen mit Live-Vorschau-Funktionalität, die es Ihnen ermöglicht, das Aussehen Ihrer Website ohne Programmierkenntnisse anzupassen.
5. **Blog-Funktionalität**: Einfaches integriertes Blogging-System, um Ihr Publikum mit frischen Inhalten zu fesseln.
6. **Dateiverwaltung**: Einfacher Datei-Explorer zur Verwaltung hochgeladener Dateien, der es einfach macht, Bilder und Dokumente zu Ihrer Website hinzuzufügen.
7. **SEO-Grundlagen**: Wesentliche SEO-Einstellungen und Metadaten-Verwaltung, um die Sichtbarkeit Ihrer Website in Suchmaschinen zu verbessern.
8. **Datenschutzkontrollen**: Anpassbare Datenschutzerklärung und Cookie-Zustimmungsfunktionen, um Ihnen bei der Einhaltung von Datenschutzbestimmungen zu helfen.
9. **Responsives Design**: Grundlegendes responsives Layout für verschiedene Bildschirmgrößen, das sicherstellt, dass Ihre Website auf Desktops, Tablets und Smartphones gut aussieht.
10. **Sichere Authentifizierung**: Passwortgeschützter Admin-Bereich, um das Backend Ihrer Website zu schützen.

### Installation

1. Laden Sie die `index.php`-Datei auf Ihren Webserver hoch.
2. Greifen Sie über Ihren Webbrowser auf die Datei zu.
3. Melden Sie sich mit den Standardzugangsdaten an (Benutzername: admin, Passwort: admin).
4. Ändern Sie das Standardpasswort sofort nach der ersten Anmeldung, um die Sicherheit zu gewährleisten.

### Verwendung

#### Admin-Panel

Greifen Sie auf das Admin-Panel zu, indem Sie `?admin` an die URL anhängen oder den Admin-Link im Footer verwenden. Über diesen Link können Sie sich anmelden und auf alle CMS-Funktionen zugreifen:

- **Inhaltsverwaltung**: Bearbeiten Sie den Seiteninhalt mit dem WYSIWYG-Editor. Dies ermöglicht es Ihnen, Text zu formatieren, Bilder hinzuzufügen und Inhalte zu strukturieren, ohne HTML kennen zu müssen.
- **Blog-Verwaltung**: Erstellen, bearbeiten und löschen Sie Blogbeiträge. Halten Sie Ihre Website mit regelmäßigen Updates frisch und binden Sie Ihr Publikum ein.
- **Design-Anpassung**: Ändern Sie grundlegende Farben, Schriftarten und Layout-Optionen. Sehen Sie Änderungen in Echtzeit vorher, um zu sehen, wie sie das Erscheinungsbild Ihrer Website beeinflussen.
- **Dateiverwaltung**: Laden Sie Dateien wie Bilder oder Dokumente hoch und verwalten Sie sie, die Sie auf Ihrer Website verwenden möchten.
- **Einstellungen**: Konfigurieren Sie allgemeine Einstellungen, SEO-Parameter und Datenschutzerklärung. Dazu gehört das Festlegen des Titels Ihrer Website, der Meta-Beschreibung und das Anpassen des Textes Ihrer Datenschutzerklärung.

#### Sicherheitsüberlegungen

Obwohl SSOPCMS sichere Hashing-Methoden für Passwörter verwendet, ist zu beachten, dass die Konfigurationsdatei (JSON) auf dem Server gespeichert wird und möglicherweise zugänglich sein könnte, wenn keine angemessenen Serversicherheitsmaßnahmen getroffen wurden. Dies macht SSOPCMS für viele Anwendungen geeignet, jedoch möglicherweise nicht für Hochsicherheitsszenarien. Stellen Sie immer sicher, dass Ihr Server ordnungsgemäß konfiguriert und gesichert ist.

Beste Praktiken zur Sicherung Ihrer SSOPCMS-Installation umfassen:
- Regelmäßige Aktualisierung Ihrer Serversoftware
- Verwendung starker, einzigartiger Passwörter
- Implementierung angemessener Dateiberechtigungen
- Verwendung von SSL/TLS-Verschlüsselung für Ihre Website

#### Ideale Anwendungsfälle

SSOPCMS ist perfekt für:

- Persönliche Portfolios: Präsentieren Sie Ihre Arbeit mit einem eleganten, einfachen Design.
- Landingpages für einzelne Produkte: Lenken Sie die Aufmerksamkeit mit einem optimierten, einseitigen Layout auf Ihr Produkt.
- Informationsseiten für Veranstaltungen: Bieten Sie alle notwendigen Details zu Ihrer Veranstaltung in einem leicht navigierbaren Format.
- Einfache Unternehmenswebsites: Präsentieren Sie Ihre Geschäftsinformationen klar und professionell.
- Projekt-Showcase-Seiten: Zeigen Sie Ihre Projekte mit einer leicht zu aktualisierenden Plattform.
- Gemeinschafts- oder Vereinswebsites: Halten Sie Mitglieder mit einfacher Inhaltsverwaltung und Blog-Funktionalität informiert.

Es ist möglicherweise nicht geeignet für:

- E-Commerce-Plattformen mit sensiblen Benutzerdaten: Während SSOPCMS für viele Anwendungen sicher ist, ist es nicht für die Handhabung sensibler finanzieller Transaktionen ausgelegt.
- Hochsicherheitsanwendungen: Für Anwendungen, die höchste Sicherheitsstufen erfordern, könnte ein robusteres CMS angemessener sein.
- Großangelegte, komplexe Websites: SSOPCMS ist auf Einfachheit ausgelegt und verfügt möglicherweise nicht über alle Funktionen, die für sehr große oder komplexe Websites benötigt werden.

### Technische Anforderungen

- PHP 7.0 oder höher: SSOPCMS nutzt moderne PHP-Funktionen für verbesserte Leistung und Sicherheit.
- Webserver mit PHP-Unterstützung (z.B. Apache, Nginx): Stellen Sie sicher, dass Ihr Webserver für die Ausführung von PHP-Skripten konfiguriert ist.
- Moderner Webbrowser für Admin-Zugriff: Für die beste Erfahrung verwenden Sie eine aktuelle Version von Chrome, Firefox, Safari oder Edge.

### Externe Dienste

SSOPCMS verwendet den folgenden externen Dienst:

- **CKEditor**: Ein WYSIWYG-Rich-Text-Editor, der von einem externen CDN geladen wird. Dies bietet eine benutzerfreundliche Oberfläche für die Inhaltsbearbeitung, erfordert jedoch eine Internetverbindung zum Laden. Bitte beachten Sie, dass dies Auswirkungen auf die Privatsphäre und Offline-Funktionalität haben kann.

### Lizenz

SSOPCMS wird unter der Creative Commons Namensnennung - Weitergabe unter gleichen Bedingungen 4.0 International (CC BY-SA 4.0) Lizenz veröffentlicht.

#### Sie dürfen:

- **Teilen** — das Material in jedwedem Format oder Medium vervielfältigen und weiterverbreiten
- **Bearbeiten** — das Material remixen, verändern und darauf aufbauen und zwar für beliebige Zwecke, sogar kommerziell

#### Unter folgenden Bedingungen:

- **Namensnennung** — Sie müssen angemessene Urheber- und Rechteangaben machen, einen Link zur Lizenz beifügen und angeben, ob Änderungen vorgenommen wurden. Diese Angaben dürfen in jeder angemessenen Art und Weise gemacht werden, allerdings nicht so, dass der Eindruck entsteht, der Lizenzgeber unterstütze gerade Sie oder Ihre Nutzung besonders.
- **Weitergabe unter gleichen Bedingungen** — Wenn Sie das Material remixen, verändern oder anderweitig direkt darauf aufbauen, dürfen Sie Ihre Beiträge nur unter derselben Lizenz wie das Original verbreiten.
- **Keine weiteren Einschränkungen** — Sie dürfen keine zusätzlichen Klauseln oder technische Verfahren einsetzen, die anderen rechtlich irgendetwas untersagen, was die Lizenz erlaubt.
- 
### Lizenz (Fortsetzung)

Für den vollständigen Lizenztext besuchen Sie: [https://creativecommons.org/licenses/by-sa/4.0/legalcode.de](https://creativecommons.org/licenses/by-sa/4.0/legalcode.de)

### Kontakt

Für Support, Feature-Anfragen oder Beiträge besuchen Sie bitte Daniel Erdmanns Website unter https://www.madewithai.eu. Dies ist der einzige Weg, um den Entwickler bezüglich SSOPCMS zu kontaktieren. Bitte beachten Sie, dass die Antwortzeiten variieren können und der Support nach bestem Bemühen erfolgt.

---

<a name="français"></a>
## Français

### Introduction

SSOPCMS (Super Simple One-Page CMS) est un système de gestion de contenu ultra-léger et efficace conçu pour les sites web d'une seule page. Développé par Daniel Erdmann, ce système offre un ensemble simplifié de fonctionnalités regroupées dans un seul fichier PHP, ce qui le rend incroyablement facile à déployer, à maintenir et à utiliser pour des projets web à petite échelle.

### Caractéristiques principales

1. **Architecture à fichier unique** : L'ensemble du CMS est contenu dans un seul fichier PHP, simplifiant l'installation et les mises à jour.
2. **Support multilingue** : Prise en charge intégrée de l'anglais, de l'allemand et du français, permettant de s'adresser à un public diversifié.
3. **Éditeur WYSIWYG** : CKEditor intégré pour une création et une édition de contenu intuitives, permettant aux utilisateurs non techniques de mettre à jour le contenu facilement.
4. **Design personnalisable** : Options de design de base avec fonctionnalité de prévisualisation en direct, vous permettant d'adapter l'apparence de votre site sans connaissance en codage.
5. **Fonctionnalité de blog** : Système de blog intégré simple pour maintenir l'engagement de votre public avec du contenu frais.
6. **Gestion de fichiers** : Explorateur de fichiers basique pour gérer les fichiers téléchargés, facilitant l'ajout d'images et de documents à votre site.
7. **Bases SEO** : Paramètres SEO essentiels et gestion des métadonnées pour aider à améliorer la visibilité de votre site dans les moteurs de recherche.
8. **Contrôles de confidentialité** : Politique de confidentialité et fonctionnalités de consentement aux cookies personnalisables pour vous aider à vous conformer aux réglementations sur la protection des données.
9. **Design responsive** : Mise en page responsive de base pour différentes tailles d'écran, assurant que votre site s'affiche correctement sur les ordinateurs de bureau, les tablettes et les smartphones.
10. **Authentification sécurisée** : Zone d'administration protégée par mot de passe pour maintenir la sécurité du backend de votre site.

### Installation

1. Téléchargez le fichier `index.php` sur votre serveur web.
2. Accédez au fichier via votre navigateur web.
3. Connectez-vous avec les identifiants par défaut (nom d'utilisateur : admin, mot de passe : admin).
4. Changez immédiatement le mot de passe par défaut après la première connexion pour assurer la sécurité.

### Utilisation

#### Panneau d'administration

Accédez au panneau d'administration en ajoutant `?admin` à l'URL ou en utilisant le lien d'administration dans le pied de page. Ce lien vous permet de vous connecter et d'accéder à toutes les fonctionnalités du CMS :

- **Gestion de contenu** : Éditez le contenu de la page à l'aide de l'éditeur WYSIWYG. Cela vous permet de formater du texte, d'ajouter des images et de structurer votre contenu sans avoir besoin de connaître le HTML.
- **Gestion du blog** : Créez, éditez et supprimez des articles de blog. Gardez votre site à jour avec des mises à jour régulières et engagez votre public.
- **Personnalisation du design** : Modifiez les couleurs de base, les polices et les options de mise en page. Prévisualisez les changements en temps réel pour voir comment ils affectent l'apparence de votre site.
- **Gestion de fichiers** : Téléchargez et gérez des fichiers tels que des images ou des documents que vous souhaitez utiliser sur votre site.
- **Paramètres** : Configurez les paramètres généraux, les paramètres SEO et la politique de confidentialité. Cela inclut la définition du titre de votre site, de la meta description et la personnalisation du texte de votre politique de confidentialité.

#### Considérations de sécurité

Bien que SSOPCMS utilise des méthodes de hachage sécurisées pour les mots de passe, il est important de noter que le fichier de configuration (JSON) est stocké sur le serveur et pourrait potentiellement être accessible si des mesures de sécurité appropriées ne sont pas mises en place sur le serveur. Cela rend SSOPCMS adapté à de nombreuses applications, mais peut ne pas convenir aux scénarios de haute sécurité. Assurez-vous toujours que votre serveur est correctement configuré et sécurisé.

Les meilleures pratiques pour sécuriser votre installation SSOPCMS incluent :
- Mise à jour régulière de votre logiciel serveur
- Utilisation de mots de passe forts et uniques
- Mise en place de permissions de fichiers appropriées
- Utilisation du chiffrement SSL/TLS pour votre site

#### Cas d'utilisation idéaux

SSOPCMS est parfait pour :

- Les portfolios personnels : Présentez votre travail avec un design élégant et simple.
- Les pages de destination pour un seul produit : Concentrez l'attention sur votre produit avec une mise en page épurée et sur une seule page.
- Les pages d'information sur les événements : Fournissez tous les détails nécessaires sur votre événement dans un format facile à naviguer.
- Les sites web d'entreprise simples : Présentez les informations de votre entreprise de manière claire et professionnelle.
- Les sites de présentation de projets : Affichez vos projets avec une plateforme facile à mettre à jour.
- Les sites web de communautés ou de clubs : Tenez les membres informés avec une gestion de contenu facile et une fonctionnalité de blog.

Il peut ne pas convenir pour :

- Les plateformes de commerce électronique avec des données utilisateur sensibles : Bien que SSOPCMS soit sécurisé pour de nombreuses applications, il n'est pas conçu pour gérer des transactions financières sensibles.
- Les applications de haute sécurité : Pour les applications nécessitant les plus hauts niveaux de sécurité, un CMS plus robuste pourrait être plus approprié.
- Les sites web complexes et à grande échelle : SSOPCMS est conçu pour la simplicité et peut ne pas avoir toutes les fonctionnalités nécessaires pour des sites très grands ou complexes.

### Exigences techniques

- PHP 7.0 ou supérieur : SSOPCMS exploite les fonctionnalités modernes de PHP pour améliorer les performances et la sécurité.
- Serveur web avec support PHP (par exemple, Apache, Nginx) : Assurez-vous que votre serveur web est configuré pour exécuter des scripts PHP.
- Navigateur web moderne pour l'accès administrateur : Pour la meilleure expérience, utilisez une version à jour de Chrome, Firefox, Safari ou Edge.

### Services externes

SSOPCMS utilise le service externe suivant :

- **CKEditor** : Un éditeur de texte riche WYSIWYG qui est chargé à partir d'un CDN externe. Cela fournit une interface conviviale pour l'édition de contenu, mais nécessite une connexion Internet pour le chargement. Veuillez noter que cela peut avoir des implications pour la confidentialité et la fonctionnalité hors ligne.

### Licence

SSOPCMS est publié sous la licence Creative Commons Attribution-ShareAlike 4.0 International (CC BY-SA 4.0).

#### Vous êtes autorisé à :

- **Partager** — copier, distribuer et communiquer le matériel par tous moyens et sous tous formats
- **Adapter** — remixer, transformer et créer à partir du matériel pour toute utilisation, y compris commerciale

#### Selon les conditions suivantes :

- **Attribution** — Vous devez créditer Daniel Erdmann, intégrer un lien vers la licence et indiquer si des modifications ont été effectuées. Vous devez indiquer ces informations par tous les moyens raisonnables, sans toutefois suggérer que l'Offrant vous soutient ou soutient la façon dont vous avez utilisé son Oeuvre.
- **Partage dans les Mêmes Conditions** — Dans le cas où vous effectuez un remix, que vous transformez, ou créez à partir du matériel composant l'Oeuvre originale, vous devez diffuser l'Oeuvre modifiée dans les même conditions, c'est à dire avec la même licence avec laquelle l'Oeuvre originale a été diffusée.
- **Pas de restrictions complémentaires** — Vous n'êtes pas autorisé à appliquer des conditions légales ou des mesures techniques qui restreindraient légalement autrui à utiliser l'Oeuvre dans les conditions décrites par la licence.

Pour le texte complet de la licence, visitez : [https://creativecommons.org/licenses/by-sa/4.0/legalcode.fr](https://creativecommons.org/licenses/by-sa/4.0/legalcode.fr)

### Contact

Pour le support, les demandes de fonctionnalités ou les contributions, veuillez visiter le site web de Daniel Erdmann à l'adresse https://www.madewithai.eu. C'est le seul moyen de contacter le développeur concernant SSOPCMS. Veuillez noter que les temps de réponse peuvent varier et que le support est fourni sur la base du meilleur effort possible.
