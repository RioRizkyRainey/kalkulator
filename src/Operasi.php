<?php

namespace Rulzi\Kalkulator;

class Operasi
{
	public function tambah(int $a, int $b)
	{
		$hasil = $a + $b;

		return $hasil;
	}

	public function kurang(int $a, int $b)
	{
		$hasil = $a - $b;

		return $hasil;
	}

	public function kali(int $a, int $b)
	{
		$hasil = $a * $b;

		return $hasil;
	}

	public function bagi(int $a, int $b)
	{
		$hasil = $a / $b;

		return $hasil;
	}

	public function kuadrat(int $a)
	{
		$hasil = $a * $a;

		return $hasil;
	}

	public function kubik(int $a)
	{
		$hasil = $a * $a * $a;

	 	return $hasil;
	}
}