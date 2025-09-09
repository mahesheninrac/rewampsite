<?php
$response_code = [
    [
        "code" => "1xx",
        "message" => "Information",
        "description" => "1xx codes are often interim responses for sharing connection status information. Not intended for final request or response action.",
    ],
    [
        "code" => 100,
        "message" => "Continue",
        "description" => "The server has received the request headers, and the client should proceed to send the request body.",
    ],
    [
        "code" => 101,
        "message" => "Switching Protocols",
        "description" => "The requester has asked the server to switch protocols.",
    ],
    [
        "code" => 102,
        "message" => "Processing",
        "description" => "This code indicates that the server has received and is processing the request, but no response is available yet. This prevents the client from timing out and assuming the request was lost.",
    ],
    [
        "code" => 103,
        "message" => "Early Hints",
        "description" => "Used to return some response headers before final HTTP message.",
    ],
    [
        "code" => "2xx",
        "message" => "Successful",
        "description" => "2xx codes indicate successful responses usually this means the action requested by the client was received, understood and accepted successfully.",
    ],
    [
        "code" => 200,
        "message" => "OK",
        "description" => "The request is OK (this is the standard response for successful HTTP requests).",
    ],
    [
        "code" => 201,
        "message" => "Created",
        "description" => "The request has been fulfilled, and a new resource is created.",
    ],
    [
        "code" => 202,
        "message" => "Accepted",
        "description" => "The request has been accepted for processing, but the processing has not been completed.",
    ],
    [
        "code" => 203,
        "message" => "Non-Authoritative Information",
        "description" => "The request has been successfully processed, but is returning information that may be from another source.",
    ],
    [
        "code" => 204,
        "message" => "No Content",
        "description" => "The request has been successfully processed, but is not returning any content.",
    ],
    [
        "code" => 205,
        "message" => "Reset Content",
        "description" => "The request has been successfully processed, but is not returning any content, and requires that the requester reset the document view.",
    ],
    [
        "code" => 206,
        "message" => "Partial Content",
        "description" => "The server is delivering only part of the resource due to a range header sent by the client.",
    ],
    [
        "code" => 207,
        "message" => "Multi-Status",
        "description" => "The message body that follows is by default an XML message and can contain a number of separate response codes, depending on how many sub-requests were made.",
    ],
    [
        "code" => 208,
        "message" => "Already Reported",
        "description" => "The members of a DAV binding have already been enumerated in a preceding part of the (multistatus) response, and are not being included again.",
    ],
    [
        "code" => 218,
        "message" => "This is fine (Apache Web Server)",
        "description" => "Used as a catch-all error condition for allowing response bodies to flow through Apache when ProxyErrorOverride is enabled.",
    ],
    [
        "code" => 226,
        "message" => "IM Used",
        "description" => "The server has fulfilled a request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance.",
    ],
    [
        "code" => "3xx",
        "message" => "Redirection",
        "description" => "3xx codes are a class of responses that suggest the User-Agent must follow another course of action to obtain the complete requested resource.",
    ],
    [
        "code" => 300,
        "message" => "Multiple Choices",
        "description" => "A link list. The user can select a link and go to that location. Maximum five addresses.",
    ],
    [
        "code" => 301,
        "message" => "Moved Permanently",
        "description" => "The requested page has moved to a new URL.",
    ],
    [
        "code" => 302,
        "message" => "Found",
        "description" => "The requested page has moved temporarily to a new URL.",
    ],
    [
        "code" => 303,
        "message" => "See Other",
        "description" => "The requested page can be found under a different URL.",
    ],
    [
        "code" => 304,
        "message" => "Not Modified",
        "description" => "Indicates the requested page has not been modified since last requested.",
    ],
    [
        "code" => 306,
        "message" => "Switch Proxy",
        "description" => "No longer used. Originally meant Subsequent requests should use the specified proxy.",
    ],
    [
        "code" => 307,
        "message" => "Temporary Redirect",
        "description" => "The requested page has moved temporarily to a new URL.",
    ],
    [
        "code" => 308,
        "message" => "Resume Incomplete",
        "description" => "Used in the resumable requests proposal to resume aborted PUT or POST requests.",
    ],
    [
        "code" => "4xx",
        "message" => "Client Error",
        "description" => "4xx codes generally are error responses specifying an issue at the client’s end. Potentially a network issue.",
    ],
    [
        "code" => 400,
        "message" => "Bad Request",
        "description" => "The request cannot be fulfilled due to bad syntax.",
    ],
    [
        "code" => 401,
        "message" => "Unauthorized",
        "description" => "The request was a legal request, but the server is refusing to respond to it. For use when authentication is possible but has failed or not yet been provided.",
    ],
    [
        "code" => 402,
        "message" => "Payment Required",
        "description" => "Not yet implemented by RFC standards, but reserved for future use.",
    ],
    [
        "code" => 403,
        "message" => "Forbidden",
        "description" => "The request was a legal request, but the server is refusing to respond to it.",
    ],
    [
        "code" => 404,
        "message" => "Not Found",
        "description" => "The requested page could not be found but may be available again in the future.",
    ],
    [
        "code" => 405,
        "message" => "Method Not Allowed",
        "description" => "A request was made of a page using a request method not supported by that page.",
    ],
    [
        "code" => 406,
        "message" => "Not Acceptable",
        "description" => "The server can only generate a response that is not accepted by the client.",
    ],
    [
        "code" => 407,
        "message" => "Proxy Authentication Required",
        "description" => "The client must first authenticate itself with the proxy.",
    ],
    [
        "code" => 408,
        "message" => "Request Timeout",
        "description" => "The server timed out waiting for the request.",
    ],
    [
        "code" => 409,
        "message" => "Conflict",
        "description" => "The request could not be completed because of a conflict in the request.",
    ],
    [
        "code" => 410,
        "message" => "Gone",
        "description" => "The requested page is no longer available.",
    ],
    [
        "code" => 411,
        "message" => "Length Required",
        "description" => "The 'Content-Length' is not defined. The server will not accept the request without it.",
    ],
    [
        "code" => 412,
        "message" => "Precondition Failed",
        "description" => "The precondition given in the request evaluated to false by the server.",
   ],

   [
        "code" => 413,
        "message" => "Request Entity Too Large",
        "description" => "The server will not accept the request, because the request entity is too large.",
    ],
    [
        "code" => 414,
        "message" => "Request-URI Too Long",
        "description" => "The server will not accept the request, because the URL is too long. Occurs when you convert a POST request to a GET request with a long query information.",
    ],
    [
        "code" => 415,
        "message" => "Unsupported Media Type",
        "description" => "The server will not accept the request, because the media type is not supported.",
    ],
    [
        "code" => 416,
        "message" => "Requested Range Not Satisfiable",
        "description" => "The client has asked for a portion of the file, but the server cannot supply that portion.",
    ],
    [
        "code" => 417,
        "message" => "Expectation Failed",
        "description" => "The server cannot meet the requirements of the Expect request-header field.",
    ],
    [
        "code" => 418,
        "message" => "I'm a teapot",
        "description" => "Any attempt to brew coffee with a teapot should result in the error code 418 I'm a teapot. The resulting entity body MAY be short and stout.",
    ],
    [
        "code" => 419,
        "message" => "Page Expired (Laravel Framework)",
        "description" => "Used by the Laravel Framework when a CSRF Token is missing or expired.",
    ],
    [
        "code" => 420,
        "message" => "Method Failure (Spring Framework)",
        "description" => "A deprecated response used by the Spring Framework when a method has failed.",
    ],
    [
       "code" => 421,
        "message" => "Misdirected Request",
        "description" => "The request was directed at a server that is not able to produce a response (for example because a connection reuse).",
    ],
    [
        "code" => 422,
        "message" => "Unprocessable Entity",
        "description" => "The request was well-formed but was unable to be followed due to semantic errors.",
    ],
    [
        "code" => 423,
        "message" => "Locked",
        "description" => "The resource that is being accessed is locked.",
    ],
    [
        "code" => 424,
        "message" => "Failed Dependency",
        "description" => "The request failed due to failure of a previous request (e.g., a PROPPATCH).",
    ],
    [
        "code" => 426,
        "message" => "Upgrade Required",
        "description" => "The client should switch to a different protocol such as TLS/1.0, given in the Upgrade header field.",
    ],
    [
        "code" => 428,
        "message" => "Precondition Required",
        "description" => "The origin server requires the request to be conditional.",
    ],
    [
        "code" => 429,
        "message" => "Too Many Requests",
        "description" => "The user has sent too many requests in a given amount of time. Intended for use with rate limiting schemes.",
    ],
    [
        "code" => 431,
        "message" => "Request Header Fields Too Large",
        "description" => "The server is unwilling to process the request because either an individual header field, or all the header fields collectively, are too large.",
    ],
    [
        "code" => 440,
        "message" => "Login Time-out",
        "description" => "The client's session has expired and must log in again. (IIS)",
    ],
    [
        "code" => 444,
        "message" => "Connection Closed Without Response",
        "description" => "A non-standard status code used to instruct nginx to close the connection without sending a response to the client, most commonly used to deny malicious or malformed requests.",
    ],
    [
        "code" => 449,
        "message" => "Retry With",
        "description" => "The server cannot honour the request because the user has not provided the required information. (IIS)",
    ],
    [
        "code" => 450,
        "message" => "Blocked by Windows Parental Controls",
        "description" => "The Microsoft extension code indicated when Windows Parental Controls are turned on and are blocking access to the requested webpage.",
    ],
    [
        "code" => 451,
        "message" => "Unavailable For Legal Reasons",
        "description" => "A server operator has received a legal demand to deny access to a resource or to a set of resources that includes the requested resource.",
    ],
    [
        "code" => 494,
        "message" => "Request Header Too Large",
        "description" => "Used by nginx to indicate the client sent too large of a request or header line that is too long.",
    ],
    [
        "code" => 495,
        "message" => "SSL Certificate Error",
        "description" => "An expansion of the 400 Bad Request response code, used when the client has provided an invalid client certificate.",
    ],
    [
        "code" => 496,
        "message" => "SSL Certificate Required",
        "description" => "An expansion of the 400 Bad Request response code, used when a client certificate is required but not provided.",
    ],
    [
        "code" => 497,
        "message" => "HTTP Request Sent to HTTPS Port",
        "description" => "An expansion of the 400 Bad Request response code, used when the client has made a HTTP request to a port listening for HTTPS requests.",
    ],
    [
        "code" => 498,
        "message" => "Invalid Token (Esri)",
        "description" => "Returned by ArcGIS for Server. Code 498 indicates an expired or otherwise invalid token.",
   ],
    [
        "code" => 499,
        "message" => "Client Closed Request",
        "description" => "A non-standard status code introduced by nginx for the case when a client closes the connection while nginx is processing the request.",
    ],
    [
        "code" => "5xx",
        "message" => "Server Error",
        "description" => "5xx error codes indicate that an error or unresolvable request occurred on the server side, whether that is a proxy or the origin host.",
    ],
    [
        "code" => 500,
        "message" => "Internal Server Error",
        "description" => "An error has occurred in a server side script, a no more specific message is suitable.",
    ],
   [
        "code" => 501,
        "message" => "Not Implemented",
       "description" => "The server either does not recognize the request method, or it lacks the ability to fulfill the request.",
    ],
    [
        "code" => 502,
        "message" => "Bad Gateway",
        "description" => "The server was acting as a gateway or proxy and received an invalid response from the upstream server.",
    ],
    [
        "code" => 503,
        "message" => "Service Unavailable",
        "description" => "The server is currently unavailable (overloaded or down).",
    ],
    [
        "code" => 504,
        "message" => "Gateway Timeout",
        "description" => "The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.",
    ],
    [
        "code" => 505,
        "message" => "HTTP Version Not Supported",
        "description" => "The server does not support the HTTP protocol version used in the request.",
    ],
    [
        "code" => 506,
        "message" => "Variant Also Negotiates",
        "description" => "Transparent content negotiation for the request results in a circular reference.",
    ],
    [
        "code" => 507,
        "message" => "Insufficient Storage",
        "description" => "The server is unable to store the representation needed to complete the request.",
    ],
    [
        "code" => 508,
        "message" => "Loop Detected",
        "description" => "The server detected an infinite loop while processing the request (sent instead of 208 Already Reported).",
    ],
    [
        "code" => 509,
        "message" => "Bandwidth Limit Exceeded",
        "description" => "The server has exceeded the bandwidth specified by the server administrator; this is often used by shared hosting providers to limit the bandwidth of customers.",
    ],
    [
        "code" => 510,
        "message" => "Not Extended",
        "description" => "Further extensions to the request are required for the server to fulfil it.",
    ],
    [
        "code" => 511,
        "message" => "Network Authentication Required",
        "description" => "The client needs to authenticate to gain network access.",
    ],
    [
        "code" => 520,
        "message" => "Unknown Error",
        "description" => "The 520 error is used as a catch-all response for when the origin server returns something unexpected, listing connection resets, large headers, and empty or invalid responses as common triggers.",
    ],
    [
        "code" => 521,
        "message" => "Web Server Is Down",
        "description" => "The origin server has refused the connection from Cloudflare.",
    ],
    [
        "code" => 522,
        "message" => "Connection Timed Out",
        "description" => "Cloudflare could not negotiate a TCP handshake with the origin server.",
    ],
   [
        "code" => 523,
        "message" => "Origin Is Unreachable",
        "description" => "Cloudflare could not reach the origin server; for example, if the DNS records for the origin server are incorrect.",
    ],
    [
        "code" => 524,
        "message" => "A Timeout Occurred",
        "description" => "Cloudflare was able to complete a TCP connection to the origin server, but did not receive a timely HTTP response.",
    ],
    [
        "code" => 525,
        "message" => "SSL Handshake Failed",
        "description" => "Cloudflare could not negotiate a SSL/TLS handshake with the origin server.",
    ],
    [
        "code" => 526,
        "message" => "Invalid SSL Certificate",
        "description" => "Used by Cloudflare and Cloud Foundry's gorouter to indicate failure to validate the SSL/TLS certificate that the origin server presented.",
    ],
    [
        "code" => 527,
        "message" => "Railgun Listener to Origin Error",
        "description" => "Error 527 indicates that the request timed out or failed after the WAN connection had been established.",
    ],
    [
        "code" => 530,
        "message" => "Origin DNS Error",
        "description" => "Error 530 indicates that the requested host name could not be resolved on the Cloudflare network to an origin server.",
    ],
    [
        "code" => 598,
        "message" => "Network Read Timeout Error",
        "description" => "Used by some HTTP proxies to signal a network read timeout behind the proxy to a client in front of the proxy.",
    ]
];
