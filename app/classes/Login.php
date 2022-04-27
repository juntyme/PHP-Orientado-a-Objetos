<?

namespace app\classes;

class Login
{
    /// Propriedade
    // public string $email;
    // public string $password;

    /// Metodos
    // public function auth(string $email, string $password): string|int
    public function auth(Crud $crud): string
    {
        // return 'O meu email é ' . $this->email . ' e minha senha é' . $this->password;
        // return 'O meu email é ' . $email . ' e minha senha é' . $password;
        return $crud->delete();
    }
}
