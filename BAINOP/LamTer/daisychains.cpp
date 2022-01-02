#define TASK "daisychains"
#define INPFILE TASK".inp"
#define OUTFILE TASK".out"

#include <bits/stdc++.h>
using namespace std;

const int N = 107;
const int V = 1007;

int num[N];

int main() {
	if (fopen(INPFILE, "r")) {
		freopen(INPFILE, "r", stdin);
		freopen(OUTFILE, "w", stdout);
	}

	ios_base::sync_with_stdio(0); cin.tie(0); cout.tie(0);

	memset(num, 0, sizeof num);

	int n; cin >> n;
	for (int i = 1; i <= n; i++) cin >> num[i];

	int ans = 0;
	for (int i = 1; i <= n; i++) {
		for (int j = i; j <= n; j++) {
            int sum = accumulate(num + i, num + j + 1, 0);
            int dis = j - i + 1;
            if (sum % dis != 0) continue;
            int average = sum / dis;

            for (int k = i; k <= j; k++)
                if (num[k] == average) {
					ans++;
					break;
                }
		}
	}

	cout << ans;
}
