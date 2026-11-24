<?php

namespace Database\Seeders;

use App\Models\Blog\Author;
use App\Models\Blog\Post;
use App\Models\Blog\PostCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    use WithoutModelEvents;
    /** * Run the database seeds. */ public function run(): void
    {
        $this->command->warn(PHP_EOL . 'Creating post categories...');
        $blogCategories = PostCategory::factory()->count(20)->create();
        $this->command->info('Post categories created.');
        $this->command->warn(PHP_EOL . 'Creating authors and posts...');
        $postTags = ['Laravel', 'PHP', 'JavaScript', 'CSS', 'DevOps', 'Testing', 'API', 'Security', 'Performance', 'Architecture', 'Git', 'Database', 'Accessibility', 'Deployment', 'Design Patterns',];
        $blogMonthlyWeights = [2, 1, 3, 2, 4, 5, 3, 6, 4, 5, 7, 3, 8, 6, 10, 12, 14, 18, 20, 16, 22, 15, 25, 10,];
        $blogTotalWeight = array_sum($blogMonthlyWeights);
        $pickBlogMonth = function () use ($blogMonthlyWeights, $blogTotalWeight): int {
            $rand = rand(1, $blogTotalWeight);
            $cumulative = 0;
            foreach ($blogMonthlyWeights as $i => $weight) {
                $cumulative += $weight;
                if ($rand <= $cumulative) {
                    return $i;
                }
            }
            return count($blogMonthlyWeights) - 1;
        };
        $authors = Author::factory()->count(10)->create();
        foreach ($authors as $author) {
            $postCount = rand(5, 12);
            Post::factory()->count($postCount)->for($author)->state(function (array $attributes) use ($author, $blogCategories, $pickBlogMonth): array {
                $monthIndex = $pickBlogMonth();
                $monthsAgo = 23 - $monthIndex;
                $start = now()->subMonths($monthsAgo)->startOfMonth();
                $end = min(now(), now()->subMonths($monthsAgo)->endOfMonth());
                return ['author_id' => $author->id, 'post_category_id' => fake()->boolean(85) ? $blogCategories->random()->id : null, 'published_at' => fake()->boolean(80) ? fake()->dateTimeBetween($start, $end) : null,];
            })->afterCreating(function (Post $post) use ($postTags): void {
                $post->attachTags(fake()->randomElements($postTags, rand(2, 5)));
            })->create();
        }
        $this->command->info('Authors and posts created.');
    }
}
