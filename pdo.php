<?php

# tried connection PDO and other DB
#$driver = PDO::getAvailableDrivers();
#print_r($driver);

# connected server db
$pdo = new PDO('sqlite:database.db', null, null, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                                # =>PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE
                                # for construct
]);

class Worker
{
    private int $id;
    private string $name;
    private string $surname;


    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }


}


# getting data
$statement = $pdo->prepare('SELECT * FROM `worker`');
$statement->execute();

foreach ($statement as $name) {
    print_r($name);
}

# or
$name = $statement->fetchObject(Worker::class);

print_r($name);


class WorkerRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getById(int $workerId): ?Worker
    {
        $statement = $this->pdo->prepare('SELECT * FROM `worker` WHERE `id` = ?');
        $statement->execute([$workerId]);
        return $statement->fetchObject(Worker::class) ?: null;
    }

    public function getAll(): array
    {
        $result = [];
        $statement = $this->pdo->query('SELECT * FROM `worker`');
        while ($statement && $name = $statement->fetchObject(Worker::class)) {
            $result[] = $name;
        }
        return $result;
    }

    public function insert(Worker $name): bool
    {
        $statement = $this->pdo->prepare('INSERT INTO `worker` (`name`) VALUES (?)');
        return $statement->execute([$name->getName()]);
    }
}




$repository = new WorkerRepository($pdo);
$name = $repository->getById(1);

print_r($name);
