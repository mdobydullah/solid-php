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
}

interface PrintableBlogPost
{
    public function print(BlogPost $blogPost): string;
}

class JsonPrintableBlogPost implements PrintableBlogPost
{
    public function print(BlogPost $blogPost): string
    {
        return json_encode($blogPost->getData());
    }
}

class HtmlPrintableBlogPost implements PrintableBlogPost
{
    public function print(BlogPost $blogPost): string
    {
        $blogPostData = $blogPost->getData();

        return "<h1>{$blogPostData['title']}</h1><p>{$blogPostData['author']}</p>";
    }
}

// Usage
$blogPost = new BlogPost();
$jsonPrintableBlogPost = new JsonPrintableBlogPost();
echo $jsonPrintableBlogPost->print($blogPost);

$htmlPrintableBlogPost = new HtmlPrintableBlogPost();
echo $htmlPrintableBlogPost->print($blogPost);
