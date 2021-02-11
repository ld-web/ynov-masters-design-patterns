# Adapter

![Adapter](docs/Adapter.png "Adapter")

L'**Adapter** est un design pattern structurel permettant, comme son nom l'indique, d'adapter l'interface d'un objet à une utilisation qu'on souhaite en faire.

> L'adapter est également désigné comme `Wrapper`

Dans l'image ci-dessus, un `Consumer` s'appuie sur l'instance d'une classe implémentant l'interface `MyInterface`. Il ne connaît donc que les méthodes définies dans cette interface.

Si on souhaite utiliser `OtherClass`, qui n'est pas compatible avec l'interface, alors il est possible de créer un `Adapter` qui lui va respecter le contrat défini par l'interface.

Dans l'exemple fourni dans les sources, on peut également considérer le cas où notre application souhaite utiliser un package extérieur. Ce package constitue ainsi une dépendance de notre application.

Une implémentation possible peut être de définir notre propre interface (`App\Env\IEnvLoader`), et les adapters nécessaires pour utiliser tel ou tel package, de manière transparente pour un code client.

Le moment représenté par l'exemple de code est donc le moment d'une migration d'un package à un autre, par exemple. Le code client (`index.php`) peut rester intact, seule la fonction de récupération du loader va être impacté. Impact déplacé sur la configuration si l'on utilise l'injection de dépendances d'ailleurs.

Ainsi, si on souhaite utiliser un nouveau package, il suffit de développer l'adapter et le fonctionnement de l'application reste assuré.
