<?php

namespace Tests\Feature;

use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{

    public function testHttp()
    {
/*         //ホーム画面
        $home = $this->get('/');
        $home->assertStatus(200);
 */
        //新規登録画面
        $register = $this->get('/register');
        $register->assertStatus(200);

        //ログイン画面
        $login = $this->get('/login');
        $login->assertStatus(200);

        //アバウトカコイチ画面
        $about = $this->get('/about');
        $about->assertStatus(200);

        //投稿作成画面
        $create = $this->get('/posts/create');
        $create->assertStatus(302);
    }

    public function testBody()
    {
/*         //ホーム画面に一致するテキストがあるか
        $home = $this->get('/');
        $home->assertSeeText('週末になるとつい立ち寄ってしまうお気に入りのバー');
 */
        //新規登録画面に一致するテキストがあるか
        $register = $this->get('/register');
        $register->assertSeeText('新規登録');

        //ログイン画面に一致するテキストがあるか
        $login = $this->get('/login');
        $login->assertSeeText('メールアドレス');

        //アバウトカコイチ画面に一致するテキストがあるか
        $about = $this->get('/about');
        $about->assertSeeText('カコイチはそんなみなさんの過去一番が');
    }

/*         public function testMypage_Posts()
    {
        //ユーザー作成
        $user = factory(User::class)->create([
            'password' => bcrypt('aaaaaaaa')
        ]);
        
        //ログイン済み
        $this->actingAs($user);

        //認証を確認
        $this->assertTrue(Auth::check());

        //マイページアクセス
        $mypage = $this->get('users/'.$user->id);
        $mypage->assertStatus(200);

        //投稿作成画面
        $create = $this->get('/posts/create');
        $create->assertStatus(200);
        
        //投稿作成
        $post = factory(Post::class)->create([
            'title' => 'test',
            'prefecture_id' => 1,
            'category_id' => 1,
        ]);
        
        //投稿詳細画面
        $posts_show = $this->get('posts/'.$post->id);
        $posts_show->assertStatus(200);

        //ユーザー投稿編集画面
        $users_show_edit = $this->get('users/'.$post->id.'/edit');
        $users_show_edit->assertStatus(200);

        // ログアウト
        $logout = $this->post('logout');
    
        // 認証されていない
        $this->assertFalse(Auth::check());
    
        //ホームにリダイレクト
        $logout->assertRedirect('/');
    }
 */}
