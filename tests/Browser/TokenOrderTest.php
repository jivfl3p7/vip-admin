<?php

namespace Tests\Browser;

use App\Order;
use App\Token;
use App\TokenOrder;
use App\User;
use Tests\Browser\Pages\TokensIndex;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Browser\Pages\Home;
use Tests\Browser\Pages\TokensCreate;

class TokenOrderTest extends DuskTestCase
{
	public function testTokenCanBeUsedToCreateTokensOrder()
	{
		$adminUser = factory(User::class)->create([
			'steamid' => '76561198033283983',
		]);

		$token = factory(Token::class)->create([
			'token_order_id' => null,
		]);

		$this->browse(function (Browser $browser) use ($adminUser, $token) {
			$browser->loginAs($adminUser)
					->visit(new \Tests\Browser\Pages\TokenOrderCreate())
					->value('@token', $token->token)
					->click('@use-token')
					->assertSee('Viewing token')
					->assertSee($token->token)
					->assertSee($token->duration . ' days')
					->assertSee($token->expiration . ' hours')
					->assertSee($token->note)
					->assertSee('Unused')
					->click('@confirm')
					->assertSee('Create confirmation');
		});
	}

	public function testTokenOrderCanGenerateConfirmation()
	{
		$adminUser = factory(User::class)->create([
			'steamid' => '76561198033283983',
		]);

		$token = factory(Token::class)->create([
			'token_order_id' => null,
		]);


		$this->browse(function (Browser $browser) use ($adminUser, $token) {
			$browser->loginAs($adminUser)
					->visit(new \Tests\Browser\Pages\TokenOrderCreate())
					->value('@token', $token->token)
					->click('@use-token')
					->assertSee('Viewing token')
					->assertSee($token->token)
					->assertSee($token->duration . ' days')
					->assertSee($token->expiration . ' hours')
					->assertSee($token->note)
					->assertSee('Unused')
					->click('@confirm')
					->assertSee('Create confirmation')
					->click('div.container-fluid > div > div.col-sm-9.col-sm-offset-3.col-md-10.col-md-offset-2.main > div.col-sm-12.col-md-6 > a')
					->assertSee('Confirmation ID')
					->assertSee('Confirmed');
		});
	}

	public function testOrderWithExtraTokensAllowsGenerationOfExtraTokens()
	{
		$adminUser = factory(User::class)->create([
			'steamid' => '76561198033283983',
		]);

		$order = factory(Order::class)->create([
			'user_id' => $adminUser->id,
		]);


		$this->browse(function (Browser $browser) use ($adminUser, $order) {
			$browser->loginAs($adminUser)
					->visit(new \Tests\Browser\Pages\TokensIndex())
					->click('@generate-extra-tokens')
					->assertSee('Extra token generated')
					->assertRouteIs('tokens.index');
		});
	}

}