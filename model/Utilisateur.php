<?PHP
	class Utilisateur{
		private ?int $id = null;
		private ?string $nom = null;
		private ?string $prenom = null;
		private ?string $email = null;
		private ?string $login = null;
		private ?string $password = null;
        private ?string $role = null;

		function __construct(string $nom, string $prenom, string $email, string $login, string $password,string $role){
			
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->login=$login;
			$this->password=$password;
            $this->role=$role;
		}
		
		function getId(): int{
			return $this->id;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getPrenom(): string{
			return $this->prenom;
		}
		function getLogin(): string{
			return $this->login;
		}
		function getEmail(): string{
			return $this->email;
		}
		function getPassword(): string{
			return $this->password;
		}
        function getRole(): string{
            return $this->role;
        }

		function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setPrenom(string $prenom): void{
			$this->prenom;
		}
		function setLogin(string $login): void{
			$this->login=$login;
		}
		function setEmail(string $email): void{
			$this->email=$email;
		}
		function setPassword(string $password): void{
			$this->password=$password;
		}
        function setRole(string $role): void{
            $this->role=$role;
        }
	}
?>