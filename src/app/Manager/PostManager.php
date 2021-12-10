<?php
    namespace App\Manager;

    use PDO;
    use App\Fram\PDOFactory;
    use App\Entity\Post;

    class PostManager
    {
        private PDO $pdo;

        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;
        }

        /**
         * @return Post[]|bool
         */
        public function getAllPosts()
        {
            $query = 'SELECT * FROM posts';
            $res = $this->pdo->query($query);
            return $res->fetchAll(PDO::FETCH_CLASS, Post::class);
        }

        public function getPostById(int $id)
        {
            $res = $this->pdo->prepare('SELECT * FROM post WHERE id = :id');
            $res->bindValue(':id', $id, \PDO::PARAM_INT);
            $res->execute();
            $res->setFetchMode(PDO::FETCH_CLASS, 'App\Entity\Post');
            return $res->fetch();
        }

        public function InsertPost(Post $post)
        {  
            $sql = $this->pdo->prepare('INSERT INTO posts(`Titre`,`Contenu`,`Auteur`,`Date`) VALUES(:titre, :contenu, :auteur,:date)');
            $sql->execute([
                ':titre' => $post->getTitle(),
                ':Contenu' => $post->getContenu(),
                ':auteur' => $post->getAuteur(),
                ':date' => $post->getDate()
            ]);
        }

        public function UpdatePost($titre, $contenu, $auteur, $date, $id)
        {  
            $sql = $this->pdo->prepare('UPDATE TABLE posts SET WHERE id = :id');
            $sql->execute([
                ':titre' => $titre,
                ':titre' => $contenu,
                ':auteur' => $auteur,
                ':date' => $date,
                ':id' => $id
            ]);

            
        }

        public function DeletePost($pdo, $id)
        {  
            PDOFactory::getPDO();
            $sql = $this->pdo->prepare('DELETE FROM posts SET WHERE id = :id');
            $sql->execute([
                ':id' => $id
            ]);

            
        }
    }
