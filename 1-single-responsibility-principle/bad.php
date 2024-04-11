<?php

class BlogPost
{
    private function getTitle(): string
    {
        return 'Title';
    }

    private function getAuthor(): string
    {
        return 'Author';
    }

    public function getData(): array
    {
        return [
          'title' => $this->getTitle(),
          'author' => $this->getAuthor(),
        ];
    }

    public function printJson(): string
    {
        return json_encode($this->getData());
    }

    public function printHtml(): string
    {
        $blogPostData = $this->getData();

        return "<h1>{$blogPostData['title']}</h1><p>{$blogPostData['author']}</p>";
    }
}

// Usage
$blogPost = new BlogPost();
echo $blogPost->printJson();
echo $blogPost->printHtml();
