#define TASK "repetitions"
#define INPFILE TASK".inp"
#define OUTFILE TASK".out"

#include <bits/stdc++.h>
using namespace std;

int main() {
	if (fopen(INPFILE, "r")) {
		freopen(INPFILE, "r", stdin);
		freopen(OUTFILE, "w", stdout);
	}

	ios_base::sync_with_stdio(0); cin.tie(0); cout.tie(0);

	string s; cin >> s; s = s + '#';
	int ans = 1;
	for (int i = 1, cur = 1; i < (int) s.size(); i++) {
        if (s[i] == s[i - 1]) cur++;
        else {
			ans = max(ans, cur);
			cur = 1;
        }
	}
	cout << ans;
}
