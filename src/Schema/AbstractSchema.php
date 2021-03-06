<?php

/**
 * Copyright 2019 Cloud Creativity Limited
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace CloudCreativity\LaravelJsonApi\Schema;

use Neomerx\JsonApi\Schema\SchemaProvider;

/**
 * Class AbstractSchema
 *
 * @package CloudCreativity\LaravelJsonApi
 * @deprecated 2.0.0 Extend `SchemaProvider` directly and apply traits as needed.
 */
abstract class AbstractSchema extends SchemaProvider
{

    use CreatesEloquentIdentities,
        CreatesLinks;

    /**
     * The API this schema relates to.
     *
     * If this is not set, then the API handling the HTTP request is the default. If you are
     * encoding JSON API resources outside of a HTTP request - e.g. queued broadcasting -
     * you must specify the API that the schema belongs to if using the `links()` helper
     * method.
     *
     * @var string|null
     */
    protected $api;
}
