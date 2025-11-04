Complete the solution so that it returns true if the first argument(string) passed in ends with the 2nd argument (also a string).

function solution($str, $ending) {
  // TODO: complete
  if($ending === '') return true;
  return substr($str,-strlen($ending)) === $ending;
}

Sample Tests
public function testFixedTests() {
    $this->assertSame(true, solution("samurai", "ai"));
    $this->assertSame(false, solution("sumo", "omo"));
    $this->assertSame(true, solution("ninja", "ja"));
    $this->assertSame(true, solution("sensei", "i"));
    $this->assertSame(false, solution("samurai", "ra"));
    $this->assertSame(false, solution("abc", "abcd"));
    $this->assertSame(true, solution("abc", "abc"));
    $this->assertSame(true, solution("abcabc", "bc"));
    $this->assertSame(false, solution('ails', 'fails'));
    $this->assertSame(true, solution('fails', 'ails'));
    $this->assertSame(false, solution('this', 'fails'));
    $this->assertSame(true, solution('yes this will pass', ''));
    $this->assertSame(false, solution('this will not pass', '`^$<>()[]*|'));
    $this->assertSame(false, solution("abc\n", 'abc'), 'Watch out for \n in the end');
  }
}
