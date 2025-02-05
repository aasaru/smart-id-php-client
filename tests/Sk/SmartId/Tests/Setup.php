<?php
/*-
 * #%L
 * Smart ID sample PHP client
 * %%
 * Copyright (C) 2018 - 2019 SK ID Solutions AS
 * %%
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 * #L%
 */
namespace Sk\SmartId\Tests;

use PHPUnit\Framework\TestCase;
use Sk\SmartId\Client;
use Sk\SmartId\Tests\Api\DummyData;

class Setup extends TestCase
{
  const RESOURCES = __DIR__ . '/../../../resources';
  
  /**
   * @var Client
   */
  protected $client;

  protected function setUp() : void
  {
    $this->client = new Client();
    $this->client
        ->setRelyingPartyUUID( DummyData::DEMO_RELYING_PARTY_UUID )
        ->setRelyingPartyName( DummyData::DEMO_RELYING_PARTY_NAME )
        ->setPublicSslKeys("sha256//wkdgNtKpKzMtH/zoLkgeScp1Ux4TLm3sUldobVGA/g4=")
        ->setHostUrl( DummyData::DEMO_HOST_URL );
  }
}
