<?php

namespace App\Entity;

use App\Repository\BoardRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BoardRepository::class)]
class Board
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle = null;

    #[ORM\Column(length: 255)]
    private ?string $background = null;

    #[ORM\OneToMany(mappedBy: 'board', targetEntity: TaskList::class)]
    private Collection $board;

    #[ORM\ManyToOne(inversedBy: 'owner')]
    private ?User $owner = null;

    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'board')]
    private Collection $users;

    public function __construct()
    {
        $this->board = new ArrayCollection();
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getBackground(): ?string
    {
        return $this->background;
    }

    public function setBackground(string $background): self
    {
        $this->background = $background;

        return $this;
    }

    /**
     * @return Collection<int, TaskList>
     */
    public function getBoard(): Collection
    {
        return $this->board;
    }

    public function addBoard(TaskList $board): self
    {
        if (!$this->board->contains($board)) {
            $this->board->add($board);
            $board->setBoard($this);
        }

        return $this;
    }

    public function removeBoard(TaskList $board): self
    {
        if ($this->board->removeElement($board)) {
            // set the owning side to null (unless already changed)
            if ($board->getBoard() === $this) {
                $board->setBoard(null);
            }
        }

        return $this;
    }

    public function getOwner(): ?User
    {
        return $this->owner;
    }

    public function setOwner(?User $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->addBoard($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeBoard($this);
        }

        return $this;
    }
}
