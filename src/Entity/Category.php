#[ORM\OneToMany(targetEntity: Article::class, mappedBy: 'categorie')]
private Collection $articles;