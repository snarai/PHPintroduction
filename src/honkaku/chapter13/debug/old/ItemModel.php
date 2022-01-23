<?php
/**
 * データベースの商品テーブルにアクセスするクラス
 */
class ItemModel
{

    /**
     * データベースに存在する全ての商品データ。
     * ここでは説明の便宜上、以下の固定データとします。
     */
    private $items = [
        '商品 001',
        '商品 002',
        '商品 003',
        '商品 004',
        '商品 005',
        '商品 006',
        '商品 007',
        '商品 008',
        '商品 009',
        '商品 010',
        '商品 011',
        '商品 012',
        '商品 013',
        '商品 014',
        '商品 015',
        '商品 016',
        '商品 017',
        '商品 018',
        '商品 019',
        '商品 020',
        '商品 021',
        '商品 022',
        '商品 023',
        '商品 024',
        '商品 025',
        '商品 026',
        '商品 027',
        '商品 028',
        '商品 029',
        '商品 030'
    ];

    /**
     * 商品データを検索するメソッド
     */
    public function find(int $offset, int $limit) : array
    {
        return array_slice($this->items, $offset, $limit);
    }

    /**
     * 商品データの全レコード数を取得するメソッド
     */
    public function countAll()
    {
        return count($this->items);
    }


}