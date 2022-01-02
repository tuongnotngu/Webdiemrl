#define TASK "daisychains"
#define INPFILE TASK".inp"
#define OUTFILE TASK".out"

#include <bits/stdc++.h>
using namespace std;
using lli = long long int;

const int N = 107;
const int V = 1007;

int num[N];
bitset <V> exist;

int main() {
	if (fopen(INPFILE, "r")) {
		freopen(INPFILE, "r", stdin);
		freopen(OUTFILE, "w", stdout);
	}

	ios_base::sync_with_stdio(0); cin.tie(0); cout.tie(0);

	int n; cin >> n;
	for (int i = 1; i <= n; i++) cin >> num[i];
	for (int i = 1; i <= n; i++) num[i] += num[i - 1];

	auto rangeSum = [&] (int l, int r) -> int {
		return num[r] - num[l - 1];
	};

    auto getAverage = [&] (int l, int r) -> int {
        assert(r >= l);
        int dis = r - l + 1;
        int cnt = num[r] - num[l - 1]; assert(cnt >= 0);
        if (cnt % dis) return 0;
        return cnt / dis;
    };


	lli ans = 0;
	for (int i = 1; i <= n; i++) {
		exist.reset();
		for (int j = i; j <= n; j++)
            exist[rangeSum(j, j)] = true;


		for (int j = i; j <= n; j++) {
            int average = getAverage(i, j);
            if (!average) continue;
            ans += exist[average];
		}
	}

	cout << ans;
}
