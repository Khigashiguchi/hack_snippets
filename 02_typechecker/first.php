<?hh
/**
 * Created by PhpStorm.
 * User: higashiguchi0kazuki
 * Date: 8/13/18
 * Time: 04:27
 */
namespace Quckstart\Examples\First;

class Box<T> {
    public function __construct(private T $elem) {
    }

  public function get(): T {
    return $this->elem;
  }
}

function get_int(): int {
  return 42;
}

function use_box(): void {
  $box = new Box(get_int());
  $i = $box->get();
  \var_dump($i);
}

use_box();
