<?php
	return [

		/*
		|--------------------------------------------------------------------------
		| Default Search Engine
		|--------------------------------------------------------------------------
		|
		| This option controls the default search connection that gets used while
		| using Laravel Scout. This connection is used when syncing all models
		| to the search service. You should adjust this based on your needs.
		|
		| Supported: "algolia", "null"
		|
		*/

		'driver' => env('SCOUT_DRIVER', 'elasticsearch'),

		/*
		|--------------------------------------------------------------------------
		| Index Prefix
		|--------------------------------------------------------------------------
		|
		| Here you may specify a prefix that will be applied to all search index
		| names used by Scout. This prefix may be useful if you have multiple
		| "tenants" or applications sharing the same search infrastructure.
		|
		*/

		'prefix' => env('SCOUT_PREFIX', ''),

		/*
		|--------------------------------------------------------------------------
		| Queue Data Syncing
		|--------------------------------------------------------------------------
		|
		| This option allows you to control if the operations that sync your data
		| with your search engines are queued. When this is set to "true" then
		| all automatic data syncing will get queued for better performance.
		|
		*/

		'queue' => env('SCOUT_QUEUE', false),

		/*
		|--------------------------------------------------------------------------
		| Chuck Sizes
		|--------------------------------------------------------------------------
		|
		| These options allow you to control the maximum chunk size when you are
		| mass importing data into the search engine. This allows you to fine
		| tune these chunk sizes based on the capabilites of your machines.
		|
		*/

		'chunk' => [
			'searchable' => 500,
			'unsearchable' => 500,
		],

		/*
		|--------------------------------------------------------------------------
		| Algolia Configuration
		|--------------------------------------------------------------------------
		|
		| Here you may configure your Algolia settings. Algolia is a cloud hosted
		| search engine which works great with Scout out of the box. Just plug
		| in your application ID and admin API key to get started searching.
		|
		*/


		'algolia' => [
			'id' => env('ALGOLIA_APP_ID', ''),
			'secret' => env('ALGOLIA_SECRET', ''),
		],
		'elasticsearch' => [
			'index' => env('ELASTICSEARCH_INDEX', 'motoon'),
			'hosts' => [
				env('ELASTICSEARCH_HOST', 'http://localhost'),
			],
			'initIndexParam' => [
				'index' => config('scout.elasticsearch.index'),
				'body' => [
					'settings' => [
						'number_of_shards' => 3,
						'number_of_replicas' => 2
					]
				]
			],
			'customQueryBody' =>  [
				'aggs' => [
					'chapter' => [
						'terms' => [
							'field' => 'chapter.id',
							'size' =>10
						]
					],
					'book' => [
						'terms' => [
							'field' => 'chapter.book.id',
							'size' =>10
						]
					],
					'source' => [
						'terms' => [
							'field' => 'chapter.book.source.id',
							'size' =>10
						]
					]
				],
				'query' => [
					'bool' => [
						'must' => [
							['query_string' => [ 'query' => '___query___' ] ] ]
						]
					],
					'highlight' => [
						'pre_tags' => [""], // not required
						'post_tags' => [""], // not required
						'fields' => [
							'text.0' => new \stdClass()
						],
						'require_field_match' => false
					]

				]



			],

		];
