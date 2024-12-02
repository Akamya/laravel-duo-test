<?php

use App\Models\User;

it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});


test('la page Contact se charge correctement', function () {
    $user = User::factory()->create();
    $response = $this->actingAs($user)->get('/contact');
    $response->assertStatus(200);
    $response->assertSee('Contactez-nous');
});
