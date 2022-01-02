#define TASK "abcs"
#define INPFILE TASK".inp"
#define OUTFILE TASK".out"

#include <bits/stdc++.h>
using namespace std;

using lli = long long int;

const int N = 7;

int main() {
	if (fopen(INPFILE, "r")) {
		freopen(INPFILE, "r", stdin);
		freopen(OUTFILE, "w", stdout);
	}

	ios_base::sync_with_stdio(0); cin.tie(0); cout.tie(0);

	lli num[N]; for (int i = 0; i < N; i++) cin >> num[i];

    sort(num, num + N);

    do {
        if (num[3] != num[0] + num[1]) continue;
        if (num[4] != num[1] + num[2]) continue;
        if (num[5] != num[0] + num[2]) continue;
        if (num[6] != num[0] + num[1] + num[2]) continue;
        break;
    } while (next_permutation(num, num + N));

    for (int i = 0; i < 3; i++) cout << num[i] << ' ';
}
