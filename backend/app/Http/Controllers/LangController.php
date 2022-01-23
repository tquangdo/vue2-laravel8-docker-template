<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/**
 * @group LangController
 * 
 * API for multi language
 */
class LangController extends Controller
{
    /**
     * index()
     * 
     * default function, put arg into session
     * 
     * @queryParam language1 The English language. Example: en
     * @queryParam language2 The Japanese language. Example: jp
     * @queryParam language3 The Chinese language. Example: cn
     * 
     * @response {
     *    name: "LangController",
     *    description: " API for multi language",
     *    item: [
     *        {
     *            name: "index()",
     *            request: {
     *            url: {
     *            protocol: "http",
     *            host: "baseUrl",
     *            path: "language/:language",
     *            query: [
     *                {
     *                    key: "language1",
     *                    value: "en",
     *                    description: "The English language.",
     *                    disabled: false
     *                },
     *                {
     *                    key: "language2",
     *                    value: "jp",
     *                    description: "The Japanese language.",
     *                    disabled: false
     *                }
     *            ],
     *            raw: "http://baseUrl/language/:language?language1=en&language2=jp",
     *            variable: [
     *                {
     *                id: "language",
     *                key: "language",
     *                value: "eius",
     *                description: ""
     *                }
     *            ]
     *            },
     *            method: "GET",
     *            header: [
     *                {
     *                    key: "Content-Type",
     *                    value: "application/json"
     *                },
     *                {
     *                    key: "Accept",
     *                    value: "application/json"
     *                }
     *            ],
     *            body: null,
     *            description: "default function, put arg into session",
     *            auth: {
     *                type: "noauth"
     *            }
     *        },
     *        header: null,
     *        cookie: [ ],
     *        body: "null"
     *      }
     *    ]
     *}
     */
    public function index(Request $req, $language)
    {
        // *.json: echo 'Hien ra locale:' . __('XXX');
        // msg.php: echo 'Hien ra locale:' . __('msg.XXX');
        Session::put('language', $language);
        return redirect()->back();
    }
}
