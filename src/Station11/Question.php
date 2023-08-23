<?php

namespace Src\Station11;

class Question
{
    public function main(array $sweets): array
    {
        $lessThanBudgetSweets = $this->getSweetsLessThanBudget($sweets,300);


        $keys = $this->getRandomKeys($lessThanBudgetSweets,300);
        return $this->makeCombination($lessThanBudgetSweets,$keys);
    }

    /**
     * 予算以下のお菓子の配列を返す
     * @param sweets お菓子の配列
     * @param budget 予算
     */
    private function getSweetsLessThanBudget(array $sweets, int $budget)
    {
        // コピーする
        $lessThanBudgetSweets = $sweets;

        foreach ($lessThanBudgetSweets as $index => $sweet) {
            if ($sweet['price'] > $budget) {
                unset($lessThanBudgetSweets[$index]);
            }
        }

        return $lessThanBudgetSweets;
    }

    // ランダムな数字を3つ返す?
    private function getRandomKeys(array $lessThanBudgetSweets, int $budget)
    {
        $result = [];
        $arrayLength = count($lessThanBudgetSweets);

        while (true) {
            $temp = rand(0,$arrayLength - 1);
            if (!in_array($temp,$result)) { array_push($result,$temp);  }

            if (count($result) == 3) {
                $howMuch = 0;
                foreach ($result as $index) { $howMuch += $lessThanBudgetSweets[$index]['price']; }
                if ($howMuch <= 300) { break; }

                // やり直しのためにリセット
                $result = [];
            }
        }

        // なんかソートしろだってさ
        sort($result);
        return $result;
    }

    private function makeCombination(array $lessThanBudgetSweets, array $keys)
    {
        $result = [];

        foreach ($keys as $key) {
            array_push($result,$lessThanBudgetSweets[$key]);
        }

        return $result;
    }
}

(new Question)->main([
    ['name' => '返り値に含まれる1', 'price' => 50],
    ['name' => '返り値に含まれる2', 'price' => 60],
    ['name' => '加算で予算上限超過のため返り値に含まれない', 'price' => 191],
    ['name' => '返り値に含まれる3', 'price' => 160],
]);
