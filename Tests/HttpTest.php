<?php

namespace SaurabhSharma\Tests\StatusCode;

use SaurabhSharma\StatusCode\Http;

it('can check http status code to 100', function () {
    expect(Http::CONTINUE)->toBeInt()->toEqual(100);
});
it('can check http status code to 101', function () {
    expect(Http::SWITCHING_PROTOCOLS)->toBeInt()->toEqual(101);
});
it('can check http status code to 102', function () {
    expect(Http::PROCESSING)->toBeInt()->toEqual(102);
});
it('can check http status code to 103', function () {
    expect(Http::EARLY_HINTS)->toBeInt()->toEqual(103);
});
it('can check http status code to 200', function () {
    expect(Http::OK)->toBeInt()->toEqual(200);
});
it('can check http status code to 201', function () {
    expect(Http::CREATED)->toBeInt()->toEqual(201);
});
it('can check http status code to 202', function () {
    expect(Http::ACCEPTED)->toBeInt()->toEqual(202);
});
it('can check http status code to 203', function () {
    expect(Http::NON_AUTHORITATIVE_INFORMATION)->toBeInt()->toEqual(203);
});
it('can check http status code to 204', function () {
    expect(Http::NO_CONTENT)->toBeInt()->toEqual(204);
});
it('can check http status code to 205', function () {
    expect(Http::RESET_CONTENT)->toBeInt()->toEqual(205);
});
it('can check http status code to 206', function () {
    expect(Http::PARTIAL_CONTENT)->toBeInt()->toEqual(206);
});
it('can check http status code to 207', function () {
    expect(Http::MULTI_STATUS)->toBeInt()->toEqual(207);
});
it('can check http status code to 208', function () {
    expect(Http::ALREADY_REPORTED)->toBeInt()->toEqual(208);
});
it('can check http status code to 218', function () {
    expect(Http::THIS_IS_FINE)->toBeInt()->toEqual(218);
});
it('can check http status code to 226', function () {
    expect(Http::IM_USED)->toBeInt()->toEqual(226);
});
it('can check http status code to 300', function () {
    expect(Http::MULTIPLE_CHOICES)->toEqual(300)->toBeInt();
});
it('can check http status code to 301', function () {
    expect(Http::MOVED_PERMANENTLY)->toBeInt()->toEqual(301);
});
it('can check http status code to 302', function () {
    expect(Http::FOUND)->toBeInt()->toEqual(302);
});
it('can check http status code to 303', function () {
    expect(Http::SEE_OTHER)->toBeInt()->toEqual(303);
});
it('can check http status code to 304', function () {
    expect(Http::NOT_MODIFIED)->toBeInt()->toEqual(304);
});
it('can check http status code to 305', function () {
    expect(Http::USE_PROXY)->toBeInt()->toEqual(305);
});
it('can check http status code to 307', function () {
    expect(Http::TEMPORARY_REDIRECT)->toBeInt()->toEqual(307);
});
it('can check http status code to 308', function () {
    expect(Http::PERMANENT_REDIRECT)->toBeInt()->toEqual(308);
});
it('can check http status code to 400', function () {
    expect(Http::BAD_REQUEST)->toBeInt()->toEqual(400);
});
it('can check http status code to 401', function () {
    expect(Http::UNAUTHORIZED)->toBeInt()->toEqual(401);
});
it('can check http status code to 402', function () {
    expect(Http::PAYMENT_REQUIRED)->toBeInt()->toEqual(402);
});
it('can check http status code to 403', function () {
    expect(Http::FORBIDDEN)->toBeInt()->toEqual(403);
});
it('can check http status code to 404', function () {
    expect(Http::NOT_FOUND)->toBeInt()->toEqual(404);
});
it('can check http status code to 405', function () {
    expect(Http::METHOD_NOT_ALLOWED)->toBeInt()->toEqual(405);
});
it('can check http status code to 406', function () {
    expect(Http::NOT_ACCEPTABLE)->toBeInt()->toEqual(406);
});
it('can check http status code to 407', function () {
    expect(Http::PROXY_AUTHENTICATION_REQUIRED)->toBeInt()->toEqual(407);
});
it('can check http status code to 408', function () {
    expect(Http::REQUEST_TIMEOUT)->toBeInt()->toEqual(408);
});
it('can check http status code to 409', function () {
    expect(Http::CONFLICT)->toBeInt()->toEqual(409);
});
it('can check http status code to 410', function () {
    expect(Http::GONE)->toBeInt()->toEqual(410);
});
it('can check http status code to 411', function () {
    expect(Http::LENGTH_REQUIRED)->toBeInt()->toEqual(411);
});
it('can check http status code to 416', function () {
    expect(Http::RANGE_NOT_SATISFIABLE)->toBeInt()->toEqual(416);
});
it('can check http status code to 412', function () {
    expect(Http::PRECONDITION_FAILED)->toBeInt()->toEqual(412);
});
it('can check http status code to 413', function () {
    expect(Http::PAYLOAD_TOO_LARGE)->toBeInt()->toEqual(413);
});
it('can check http status code to 414', function () {
    expect(Http::URI_TOO_LONG)->toBeInt()->toEqual(414);
});
it('can check http status code to 415', function () {
    expect(Http::UNSUPPORTED_MEDIA_TYPE)->toBeInt()->toEqual(415);
});
it('can check http status code to 417', function () {
    expect(Http::EXPECTATION_FAILED)->toBeInt()->toEqual(417);
});
it('can check http status code to 418', function () {
    expect(Http::I_AM_A_TEAPOT)->toBeInt()->toEqual(418);
});
it('can check http status code to 419', function () {
    expect(Http::PAGE_EXPIRED)->toBeInt()->toEqual(419);
});
it('can check http status code to 421', function () {
    expect(Http::MISDIRECTED_REQUEST)->toBeInt()->toEqual(421);
});
it('can check http status code to 422', function () {
    expect(Http::UNPROCESSABLE_ENTITY)->toBeInt()->toEqual(422);
});
it('can check http status code to 423', function () {
    expect(Http::LOCKED)->toBeInt()->toEqual(423);
});
it('can check http status code to 424', function () {
    expect(Http::FAILED_DEPENDENCY)->toBeInt()->toEqual(424);
});
it('can check http status code to 425', function () {
    expect(Http::TOO_EARLY)->toBeInt()->toEqual(425);
});
it('can check http status code to 426', function () {
    expect(Http::UPGRADE_REQUIRED)->toBeInt()->toEqual(426);
});
it('can check http status code to 428', function () {
    expect(Http::PRECONDITION_REQUIRED)->toBeInt()->toEqual(428);
});
it('can check http status code to 429', function () {
    expect(Http::TOO_MANY_REQUESTS)->toBeInt()->toEqual(429);
});
it('can check http status code to 431', function () {
    expect(Http::REQUEST_HEADER_FIELDS_TOO_LARGE)->toBeInt()->toEqual(431);
});
it('can check http status code to 440', function () {
    expect(Http::LOGIN_TIME_OUT)->toBeInt()->toEqual(440);
});
it('can check http status code to 444', function () {
    expect(Http::NO_RESPONSE)->toBeInt()->toEqual(444);
});
it('can check http status code to 449', function () {
    expect(Http::RETRY_WITH)->toBeInt()->toEqual(449);
});
it('can check http status code to 450', function () {
    expect(Http::BLOCKED_BY_WINDOWS_PARENTAL_CONTROL)->toBeInt()->toEqual(450);
});
it('can check http status code to 451', function () {
    expect(Http::UNAVAILABLE_FOR_LEGAL_REASONS)->toBeInt()->toEqual(451);
});
it('can check http status code to 460', function () {
    expect(Http::CLIENT_CLOSED_THE_CONNECTION)->toBeInt()->toEqual(460);
});
it('can check http status code to 463', function () {
    expect(Http::X_FORWARDED_FOR_TOO_LARGE)->toBeInt()->toEqual(463);
});
it('can check http status code to 494', function () {
    expect(Http::REQUEST_HEADER_TOO_LARGE)->toBeInt()->toEqual(494);
});
it('can check http status code to 495', function () {
    expect(Http::SSL_CERTIFICATE_ERROR)->toBeInt()->toEqual(495);
});
it('can check http status code to 496', function () {
    expect(Http::SSL_CERTIFICATE_REQUIRED)->toBeInt()->toEqual(496);
});
it('can check http status code to 497', function () {
    expect(Http::HTTP_REQUEST_SENT_TO_HTTPS_PORT)->toBeInt()->toEqual(497);
});
it('can check http status code to 498', function () {
    expect(Http::INVALID_TOKEN)->toBeInt()->toEqual(498);
});
it('can check http status code to 499', function () {
    expect(Http::TOKEN_REQUIRED)->toBeInt()->toEqual(499);
});
it('can check http status code to 500', function () {
    expect(Http::INTERNAL_SERVER_ERROR)->toBeInt()->toEqual(500);
});
it('can check http status code to 501', function () {
    expect(Http::NOT_IMPLEMENTED)->toBeInt()->toEqual(501);
});
it('can check http status code to 502', function () {
    expect(Http::BAD_GATEWAY)->toBeInt()->toEqual(502);
});
it('can check http status code to 503', function () {
    expect(Http::SERVICE_UNAVAILABLE)->toBeInt()->toEqual(503);
});
it('can check http status code to 504', function () {
    expect(Http::GATEWAY_TIMEOUT)->toBeInt()->toEqual(504);
});
it('can check http status code to 505', function () {
    expect(Http::HTTP_VERSION_NOT_SUPPORTED)->toBeInt()->toEqual(505);
});
it('can check http status code to 506', function () {
    expect(Http::VARIANT_ALSO_NEGOTIATES)->toBeInt()->toEqual(506);
});
it('can check http status code to 507', function () {
    expect(Http::INSUFFICIENT_STORAGE)->toBeInt()->toEqual(507);
});
it('can check http status code to 508', function () {
    expect(Http::LOOP_DETECTED)->toBeInt()->toEqual(508);
});
it('can check http status code to 509', function () {
    expect(Http::BANDWIDTH_LIMIT_EXCEEDED)->toBeInt()->toEqual(509);
});
it('can check http status code to 510', function () {
    expect(Http::NOT_EXTENDED)->toBeInt()->toEqual(510);
});
it('can check http status code to 511', function () {
    expect(Http::NETWORK_AUTHENTICATION_REQUIRED)->toBeInt()->toEqual(511);
});
it('can check http status code to 520', function () {
    expect(Http::WEB_SERVER_RETURNED_AN_UNKNOWN_ERROR)->toBeInt()->toEqual(520);
});
it('can check http status code to 521', function () {
    expect(Http::WEB_SERVER_IS_DOWN)->toBeInt()->toEqual(521);
});
it('can check http status code to 522', function () {
    expect(Http::CONNECTION_TIMED_OUT)->toBeInt()->toEqual(522);
});
it('can check http status code to 523', function () {
    expect(Http::ORIGIN_IS_UNREACHABLE)->toBeInt()->toEqual(523);
});
it('can check http status code to 524', function () {
    expect(Http::A_TIMEOUT_OCCURRED)->toBeInt()->toEqual(524);
});
it('can check http status code to 525', function () {
    expect(Http::SSL_HANDSHAKE_FAILED)->toBeInt()->toEqual(525);
});
it('can check http status code to 526', function () {
    expect(Http::INVALID_SSL_CERTIFICATE)->toBeInt()->toEqual(526);
});
it('can check http status code to 527', function () {
    expect(Http::RAILGUN_ERROR)->toBeInt()->toEqual(527);
});
it('can check http status code to 529', function () {
    expect(Http::SITE_IS_OVERLOADED)->toBeInt()->toEqual(529);
});
it('can check http status code to 530', function () {
    expect(Http::SITE_IS_FROZEN)->toBeInt()->toEqual(530);
});
it('can check http status code to 598', function () {
    expect(Http::NETWORK_READ_TIMEOUT_ERROR)->toBeInt()->toEqual(598);
});
