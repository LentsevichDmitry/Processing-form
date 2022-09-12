<?php

class ValidationBuilder
{
    public $errors = array();
    public $input = array();

    private function transform(string $value, bool $trim = false): string
    {
        $processedValue = $value ?? '';

        return $trim ? trim($processedValue) : $processedValue;
    }

    public function cityName(string $region1, string $city1, string $region2, string $city2): self
    {
        $this->input['region1'] = $this->transform($region1);
        $this->input['city1'] = $this->transform($city1, true);
        $this->input['region2'] = $this->transform($region2);
        $this->input['city2'] = $this->transform($city2, true);

        if (strlen($city1) < 3 || strlen($city2) < 3) {
            $this->errors[] = 'Your city is not real, please input correct city name';
        }

        return $this;
    }

    public function notNullSize(int $size): self
    {
        if ($size <= 0) {
            $this->errors[] = 'Size cannot be equal to or less than zero';
        }

        return $this;
    }

    public function notNullWeigh(int $weigh): self
    {
        if ($weigh <= 0) {
            $this->errors[] = 'Weigh cannot be equal to or less than zero';
        }

        return $this;
    }

    public function notNullPost(int $post1, int $post2): self
    {
        $this->input['post1'] = $this->transform($post1, true);
        $this->input['post2'] = $this->transform($post2, true);

        if ($post1 <= 0 || $post2 <= 0) {
            $this->errors[] = 'Post cannot be equal to or less than zero';
        }

        return $this;
    }

    public function maxSize(int $size): self
    {
        $this->input['size'] = $this->transform($size, true);

        if ($size > 91) {
            $this->errors[] = 'Max size package - 91 sm. Your package too big size, 
                                                                    please input correct size';
        }

        return $this;
    }

    public function maxWeigh(int $weigh): self
    {
        $this->input['weigh'] = $this->transform($weigh, true);

        if ($weigh > 68) {
            $this->errors[] = 'Max weigh package - 68 kg. Your package too big weigh, 
                                                                    please input correct weigh';
        }

        return $this;
    }
}
